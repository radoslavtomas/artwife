<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'

</script>

<template>
    <MainLayout>
        <Head title="Festival" />

        <div id="festival">
            <!-- TEASER IMAGE -->
            <div
                class="teaser-img-container-large"
                style="background-image: url('/img/cover.png__1200x600_q85_crop_subsampling-2_upscale.jpg')"
            ></div>

            <!-- FESTIVAL TITLE -->
            <header id="festival-title">
                <h1 class="display-2 lh-1">ArtWife</h1>
            </header>

            <!-- FESTIVAL BODY -->
            <div id="festival-body" class="fs-3 lh-sm">
                <div style="display:none">
                    <p>ArtWife je feministický a rodovo-orientovaný umelecký festival, ktorý sa koná v kultúrnom centre Diera do sveta v Liptovskom Mikuláši. Cieľom festivalu nabúrať, kritizovať a spochybňovať (aj) genderové stereotypy z feministickej perspektívy.</p>
                </div>
                <p>ArtWife je feministický a rodovo-orientovaný festival, ktorý sa koná v kultúrnom centre Diera do sveta v Liptovskom Mikuláši. Cieľom festivalu nabúrať, kritizovať a spochybňovať (aj) genderové stereotypy z feministickej perspektívy a zároveň prezentovať súčasných umelcov a umelkyne, ktorých umelecká prax je zameraná na tieto témy. Okrem iného je ambíciou podujatia vzdelávať, kultivovať a scitlivovať publikum v otázkach a témach, ktoré sa v lokálnom kontexte javia ako radikálne či kontroverzné a prispievať tak k normalizácii feministického a rodového diskurzu na Slovensku.</p>
            </div>
        </div>

        <!-- FESTIVAL YEARS -->
        <div id="festival-years" class="mt-2">
            <div id="festival-years-grid" class="row gx-2 gy-2">

                <div class="col-12 col-md-6 col-lg-6">
                    <a href="/festivaly/artwife/jazyk/">
                        <div class="card teaser-card teaser-img-container-edition"
                             style="background-image: url('/img/cover.png__600x300_q85_crop_subsampling-2_upscale.jpg')">

                            <!-- FESTIVAL YEAR TEASER IMAGE -->
<!--                            <img class="card-img-top" style="" src="/img/cover.png__600x300_q85_crop_subsampling-2_upscale.jpg">-->

                            <div class="card-img-overlay edition-overlay">
                                <div class="center">
                                    <div id="year" class="display-3">
                                        2024
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <a href="/festivaly/artwife/jazyk/">
                        <div class="card teaser-card teaser-img-container-edition"
                             style="background-image: url('/img/cover.png__600x300_q85_crop_subsampling-2_upscale.jpg')">

                            <!-- FESTIVAL YEAR TEASER IMAGE -->
<!--                            <img class="card-img-top" style="" src="/img/cover.png__1200x600_q85_crop_subsampling-2_upscale.jpg">-->

                            <div class="card-img-overlay edition-overlay">
                                <div class="center">
                                    <div id="year" class="display-3">
                                        2023
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <a href="/festivaly/artwife/sesterstvo/">

                        <div class="card teaser-card teaser-img-container-edition"
                             style="background-image: url('/img/cover_web.jpg__600x300_q85_crop_subsampling-2_upscale.jpg')">
                            <!-- FESTIVAL YEAR TEASER IMAGE -->
<!--                            <img class="card-img-top" style="" src="/img/cover_web.jpg__600x300_q85_crop_subsampling-2_upscale.jpg">-->

                            <div class="card-img-overlay edition-overlay">
                                <div class="center">
                                    <div id="year" class="display-3">
                                        2022
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
@import "../../css/festival.css";
@import "../../css/utilities.css";
</style>
