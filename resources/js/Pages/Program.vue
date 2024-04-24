<script setup>
import { Head, usePage, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value
const edition = computed(() => usePage().props.edition).value.data
const events = computed(() => usePage().props.events).value.data


let data = {
    edition_key: null,
    title: null,
    body: null,
    year: null,
    hero_img: null,
}


data.edition_key = edition.edition_key
data.title = getLocaleVersion(edition.title, locale).title
data.body = getLocaleVersion(edition.body, locale).body
data.year = edition.year
data.hero_img = edition.image

onMounted(() => {
    console.log(edition)
    console.log(events)
})

</script>

<template>
    <MainLayout>
        <Head title="Program" />

        <div id="festival">

            <!-- TEASER IMAGE -->
            <div
                class="teaser-img-container-large"
                :style="{ backgroundImage: 'url(' + `/storage/${data.hero_img}` + ')' }"
            ></div>

            <!-- FESTIVAL YEAR TITLE -->
            <header id="festival-title" class="display-2 lh-1 mb-1">
                <Link href="/festival">ArtWife</Link> / <span class="uppercase">ARTWIFE {{ data.year }}: {{ data.title }}</span>
            </header>



            <!-- FESTIVAL YEAR BODY -->
            <div id="festival-body" class="fs-3 lh-sm" v-html="data.body">
            </div>
        </div>

        <!-- FESTIVAL YEAR PROGRAMMING -->





        <div id="year-programming" class="mt-2">

            <div class="row g-2">

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/t-talk-aka-testosterone-talk/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->
                            <div
                                class="teaser-img-container-program"
                                style="background-image: url('/img/2023/t-talk_aka_testosterone_talk.jpg')"
                            ></div>


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">T-TALK AKA TESTOSTERONE TALK</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">9.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">15:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/cvicenie-s-monografiami/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->
                            <div
                                class="teaser-img-container-program"
                                style="background-image: url('/img/2023/cvicenie_s_mografiami.jpg')"
                            ></div>


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">CVIČENIE S MONOGRAFIAMI</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">9.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">16:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/zeny-ktore-sa-rozhodli-prehovorit/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->
                            <div
                                class="teaser-img-container-program"
                                style="background-image: url('/img/2023/kedrova4.jpg')"
                            ></div>

                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">ŽENY, KTORÉ SA ROZHODLI PREHOVORIŤ</h2></header>

                                <p>prednáška</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">9.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">17:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/cyber-elf/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/img/2023/can20230511_086.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">MAGDA SZPECHT: CYBER ELF</h2></header>

                                <p>performance</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">9.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">19:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/anna-vaverkova-cz/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/01/7e/017e4c24-2531-4718-bc7e-5d6ddfa4e9df/anna_vaverkova_-_foto_6.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">ANNA VAVERKOVÁ (CZ)</h2></header>

                                <p>koncert</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">9.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">21:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/apolonia-apolonia-art-chance/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/7a/08/7a083e30-a8f7-4cc3-b311-e23579e6a4d6/snimka_obrazovky_2023-07-24_094303.png__600x300_q85_crop_subsampling-2_upscale.png">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">APOLONIA, APOLONIA</h2></header>

                                <p>premietanie</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">09:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/art-chance-4-umenie-feminizmus/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/4b/b8/4bb825ff-95c6-42aa-a6c8-1947a0844fa5/art_like_a_chance_obraz_martiny_smutnej.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">ART LIKE A CHANCE #4 - UMENIE A FEMINIZMUS</h2></header>

                                <p>artist talk</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">11:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/jazyk-od-inkvizicie-k-inkluzii/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/24/cf/24cfc8c8-a452-4846-94dc-3a5f371437d7/motiv5.png__600x300_q85_crop_subsampling-2_upscale.png">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">JAZYK: OD INKVIZÍCIE K INKLÚZII</h2></header>

                                <p>diskusia</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">13:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/druha-smena-tvorime-spolocne-feministicky-jazyk/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/c2/2b/c22b3e37-f74b-452f-aae8-f3df4f9da9a4/workshop_druha_smena.png__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">DRUHÁ SMĚNA: TVORÍME SPOLOČNE FEMINISTICKÝ JAZYK</h2></header>

                                <p>workshop</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">14:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/beautiful-confusion-collective-black-dress-gb/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/7e/1f/7e1fa196-5c25-460a-9c60-6266cfc24aa3/bd_paul_wade_01.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">BEAUTIFUL CONFUSION COLLECTIVE: BLACK DRESS (GB)</h2></header>

                                <p>performance</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">16:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/co-varis-v-tom-hrnci-jazykova-obraznost-v-umeni-romskych-zien/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/cc/60/cc607709-94d6-486e-9f99-0e583ab497c6/motiv4.png__600x300_q85_crop_subsampling-2_upscale.png">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">ČO TO VARÍŠ V TOM HRNCI? JAZYKOVÁ OBRAZNOSŤ V UMENÍ RÓMSKYCH ŽIEN</h2></header>

                                <p>diskusia</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">18:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/francesca-foscarini-punk-kill-me-please/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/35/11/3511bf0b-27fd-4291-a5ac-fbbcb1bcc360/punkkill_me_please.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">FRANCESCA FOSCARINI: PUNK. KILL ME PLEASE</h2></header>

                                <p>performance</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">20:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/niko-g-x-kali-ro/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/54/5b/545b78c7-e70b-408a-b596-c3f36950542d/niko_g_x_kali.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">NIKO G X KALI (RO)</h2></header>

                                <p>koncert</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">21:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/transmisia-sk/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/60/08/6008fbee-00d3-4ec6-86b4-cdfe9e05d1cf/trnsmsa.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">TRANSMISIA (SK)</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">10.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">22:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/postav-sa-za-seba/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/5b/e5/5be589b5-8f00-429f-a877-ae9403ee646a/bianka_urbanovska.jpeg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">POSTAV SA ZA SEBA</h2></header>

                                <p>workshop</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">11.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">10:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/niet-povabnejsej-veci-na-svete-ako-je-rovnost-respekt-v-rozkvete/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/df/0b/df0beba1-7d8e-4760-85c8-4c5bb809747c/workshop_nesehnuti.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">NIET PÔVABNEJŠEJ VECI NA SVETE, AKO JE ROVNOSŤ A REŠPEKT V ROZKVETE!</h2></header>

                                <p>workshop</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">11.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">10:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/pr-strachu-jazyk-antigenderoveho-hnutia/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/ec/e9/ece93966-8372-4c17-abc6-48b1e4350dc5/dxrcthvgbj.png__600x300_q85_crop_subsampling-2_upscale.png">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">PR STRACHU: JAZYK ANTIGENDEROVÉHO HNUTIA</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">11.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">13:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/innenhof-dedina/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/96/db/96db184d-a4b0-40bb-87d2-09dc43140a76/dedina.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">INNENHOF: DEDINA</h2></header>

                                <p>performance</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">11.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">20:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/anna-vs-june-gr/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/2e/d0/2ed01000-6041-4a8e-9ffa-855c7c391956/anna_vs_june_foto.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">ANNA VS JUNE (GR)</h2></header>

                                <p>koncert</p>
                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">11.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">21:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/svabka-krumple-zemiaky-ty-si-sa-do-akeho-jazyka-narodila/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/37/af/37afbb57-2c9a-45e4-8e63-b007c10f77e5/zuzana_dadova_svabka_krumple_1.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">ŠVÁBKA, KRUMPLE, ZEMIAKY... A TY SI SA DO AKÉHO JAZYKA NARODILA?</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">12.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">10:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/strojovy-jazyk/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/c0/7e/c07e37f4-31b9-4e31-a22e-6b06f47314f5/motiv2.png__600x300_q85_crop_subsampling-2_upscale.png">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">STROJOVÝ JAZYK</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">12.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">13:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/ako-hovorit-jednoducho-o-zlozitych-veciach/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/09/1c/091c30ad-fb53-4c10-baf7-da7545fcc22d/azexdfg.png__600x300_q85_crop_subsampling-2_upscale.png">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">AKO HOVORIŤ JEDNODUCHO O ZLOŽITÝCH VECIACH?</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">12.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">18:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/natasa-zivkovic-sonny-si/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/fb/b9/fbb98084-3d33-422a-9e0f-2c4f1909a9fc/natasa_zivkovic_sine_102fotonadazgank.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">NATAŠA ŽIVKOVIČ: SONNY (SI)</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">12.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">20:00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <a href="/program/gina-birch-gb/">
                        <div class="card p-2 h-100">

                            <!-- EVENT TEASER IMAGE -->


                            <img class="card-img-top mb-2" src="/media/filer_public_thumbnails/filer_public/61/39/61398e0e-1e56-4c1b-9712-1cabfaf524f8/gina_birch_-_press_photo_2.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">


                            <div class="card-body p-0 fs-3 lh-sm">

                                <!-- EVENT TITLE -->
                                <header><h2 class="fs-1 lh-1 text-uppercase">GINA BIRCH (GB)</h2></header>


                            </div>

                            <div class="card-footer fs-4 teaser-footer p-0 m-1">
                                <div class="row">
                                    <div class="col">
                                        <span class="m-0 mt-1">12.08.</span>
                                    </div>
                                    <div class="col" style="text-align:right;">
                                        <span class="m-0 mt-1">21:30</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </MainLayout>
</template>

<style scoped>
@import "../../css/festival_year.css";
@import "../../css/utilities.css";
</style>
