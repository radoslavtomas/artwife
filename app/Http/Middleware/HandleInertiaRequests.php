<?php

namespace App\Http\Middleware;

use App\Http\Resources\PeopleResource;
use App\Models\Navigation;
use App\Models\People;
use App\Models\Setting;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Middleware;
use Illuminate\Support\Facades\App;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
//            'auth' => [
//                'user' => $request->user(),
//            ],
            'navigation' => function () {
                return $this->getNavigationItems();
            },
            'locale' => function () {
                return app()->getLocale();
            },
            'contacts' => function () {
                return $this->getEssentialPeople();
            },
            'translations' => function () {
                return $this->getTranslations();
            },
            'settings' => function () {
                return $this->getSettings();
            }
        ];
    }

    private function getNavigationItems()
    {
        // TODO: cache navigation
        $navigation = Navigation::where([
            ['navigation_key', 'main'],
            ['language', app()->getLocale()]
        ])->first();

        return $navigation ? $navigation['navigation'] : null;
    }

    private function getEssentialPeople()
    {
        // TODO: cache people
        $contacts = People::where('essential', 1)->get()->sortBy('order');

        return PeopleResource::collection($contacts);
    }

    private function getSettings()
    {
        // TODO: cache settings
        return $this->getCollectionsAsKeyValuePairs(Setting::where('active', 1)->get());
    }

    private function getTranslations()
    {
        // TODO: cache translations
        return $this->getCollectionsAsKeyValuePairs(Translation::where('active', 1)->get());
    }

    private function getCollectionsAsKeyValuePairs($settings): array
    {
        $data = [];

        foreach ($settings as $item) {
            $data[$item['key']] = $item['value'];
        }

        return $data;
    }
}
