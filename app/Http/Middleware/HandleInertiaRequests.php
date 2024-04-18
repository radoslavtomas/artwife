<?php

namespace App\Http\Middleware;

use App\Models\Navigation;
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
            'auth' => [
                'user' => $request->user(),
            ],
            'navigation' => function () {
                return $this->getNavigationItems();
            },
            'locale' => function () {
                return app()->getLocale();
            },
        ];
    }

    private function getNavigationItems()
    {
        $navigation = Navigation::where([
            ['navigation_key', 'main'],
            ['language', app()->getLocale()]
        ])->first();

        return $navigation ? $navigation['navigation'] : null;
    }
}
