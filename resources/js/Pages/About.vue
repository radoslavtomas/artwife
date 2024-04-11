<script setup>
import { Head } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'

</script>

<template>
    <MainLayout>
        <Head title="About" />

        <!-- <div style="padding-left:15px; padding-right: 15px;"> -->
        <div id="about" class="">
            <!-- gallery of members of diera -->
            <!-- SLIDER -->
            <div class="gallery-slider">
                <div class="slider-body">
                    <div id="carousel-gallery-" class="carousel slide" data-bs-ride="carousel" style="padding:0px;">

                        <!-- Photos -->
                        <div class="carousel-inner">
                            <!-- Jana Mikus Hanzelova (riaditeľka, projektový manažment, dramaturgia) -->
                            <div class="carousel-item active" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/1__jana_mikus_hanzelova_Dg9N3IW.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Jana Hanzelová</h4>
                                    <p><em>riaditeľka, projektový manažment, dramaturgia</em></p>
                                </div>
                            </div>

                            <!-- Jan Hanzel Mikus (finančný manažment, administratíva) -->
                            <div class="carousel-item" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/2__jan_mikus.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Ján Mikuš</h4>
                                    <p><em>finančný manažment, administratíva</em></p>
                                </div>
                            </div>

                            <!-- Natalia Kudnisova (produkcia) -->
                            <div class="carousel-item" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/3__natalia_kundisova_Auru6xw.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Natália Kundisova</h4>
                                    <p><em>produkcia</em></p>
                                </div>
                            </div>

                            <!-- Barbora Bohusova (grafika, sociálne siete) -->
                            <div class="carousel-item" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/4__barbora_bohusova_SRqaNkd.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Barbora Bohušová</h4>
                                    <p><em>grafika, sociálne siete</em></p>
                                </div>
                            </div>

                            <!-- Matej Zofcin (hudobna dramaturgia) -->
                            <div class="carousel-item" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/5__matej_zofcin_7WiGXwk.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Matej Žofčín</h4>
                                    <p><em>hudobná dramaturgia</em></p>
                                </div>
                            </div>

                            <!-- Andrea Kapráliková (dramaturgia školy a komunity) -->
                            <div class="carousel-item" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/6__andrea_kapralikova_hiQwBn9.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Andrea Kapráliková</h4>
                                    <p><em>dramaturgia školy a komunity</em></p>
                                </div>
                            </div>

                            <!-- Stanislav Stofcik (technika - zvuk)  -->
                            <div class="carousel-item" data-bs-interval="1500" >

                                <div class="image-container">
                                    <img src="/img/7__stanislav_stofcik_yyy9ao5.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Stanisla Štofčík</h4>
                                    <p><em>technika - zvuk</em></p>
                                </div>
                            </div>

                            <!-- Jozef Kosik (technika - svetlo) -->
                            <div class="carousel-item" data-bs-interval="1500">

                                <div class="image-container">
                                    <img src="/img/8__jozef_kosik_18jyRhG.jpg" style="cursor:auto">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Jozef Kosik</h4>
                                    <p><em>technika - svetlo</em></p>
                                </div>
                            </div>

                        </div>

                        <!-- Prev/Next Controls -->
                        <button type="button" class="carousel-control-prev" data-bs-target="#carousel-gallery-" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </button>
                        <button type="button" class="carousel-control-next" data-bs-target="#carousel-gallery-" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </button>
                    </div>
                </div>
            </div>

            <h1>
                O nás
            </h1>

            <div id="about-content">
                <p>Diera do Sveta je kultúrne centrum a špecializované kníhkupectvo v Liptovskom Mikuláši, ktoré v roku 2014 založili a otvorili Jana Mikuš Hanzelová, Ján Mikuš a Helena Hajková. Cieľom priestoru je vytvoriť zázemie pre nezávislú, alternatívnu a menšinovú kultúru a umožňovať verejné stretávanie, kolektívne neformálne vzdelávanie a spoločenskú kultiváciu.Organizácia a dramaturgické zameranie Diery do sveta je postavené na niekoľkých kľúčových ideových princípoch. Medzi ne patria feminizmus, rodová rovnosť, ekologickosť, ne-hierarchickosť a spoločensko-kultúrna angažovanosť. Dramaturgickou ambíciou kultúrneho centra je prinášať rozličné umelecko-kultúrne formáty, ktoré kriticky reagujú na súčasné urgentné problémy a krízy a zároveň majú emancipačný potenciál. Kolektív Diery do sveta verí v potrebu sociálnej a klimatickej spravodlivosti, medziľudskej solidarity, egalitárnosť a v silu kolektívnej organizácie.V umení a kultúre hľadáme vymedzenie voči dominantných diskurzom a praktikám, ktoré sú založené na vykorisťovaní a marginalizácii slabších.<br>
                    <br>
                    Naším cieľom je byť výluční v kvalite, avšak nevylučovať nikoho.</p>

                <div id="about-sections" class="row">

                    <div class="col col-sm-11 col-md-11 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h2><strong>Kníhkupectvo</strong></h2>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Súčasťou kultúrneho centra je tiež špecializované kníhkupectvo, ktorého výber je zameraný na nekomerčné tituly, nezávislých vydavateľov a na knihy s vysokou estetickou kvalitou. Jeho súčasťou je aj segment kvalitnej a súčasnej detskej literatúry, ktorá na slovensku v ponuke chýba.</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <img src="/img/diera_bookstore.jpg__4096x2730_q85_subsampling-2.jpg"
                                             alt=""
                                             class="img-fluid"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-sm-11 col-md-11 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h2><strong>Kolektív</strong></h2>
                            </div>

                            <div class="card-body">
                                <ul id="collective-list" style="">
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><strong>Jana M.  Hanzelová</strong>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">riaditeľka, projektový manažment, dramaturgia</li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><strong>Ján Mikuš</strong>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">finančný manažment, administratíva</li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><strong><span class="x4k7w5x x1h91t0o x1h9r5lt xv2umb2 x1beo9mf xaigb6o x12ejxvf x3igimt xarpa2k xedcshv x1lytzrv x1t2pt76 x7ja8zs x1qrby5j x1jfb8zj">Natália Kundisová</span></strong>
                                        <ul>
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><span class="x4k7w5x x1h91t0o x1h9r5lt xv2umb2 x1beo9mf xaigb6o x12ejxvf x3igimt xarpa2k xedcshv x1lytzrv x1t2pt76 x7ja8zs x1qrby5j x1jfb8zj">produkcia</span></li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><strong>Barbora Bohušová</strong>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">grafický dizajn, sociálne siete</li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><strong>Matej Žofčín</strong>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">hudobná dramaturgia</li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><b>Andrea Kapráliková</b>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">dramaturgia školy a komunity</li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><strong>Stanislav Štofčík</strong>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">technika - zvuk</li>
                                        </ul>
                                    </li>
                                    <li class="cms-plugin cms-plugin-92" style="line-height: 1;"><b>Jozef Košík</b>
                                        <ul style="">
                                            <li class="cms-plugin cms-plugin-92" style="line-height: 1;">technika - svetlo</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-sm-11 col-md-11 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h2><strong>Priestor</strong></h2>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li class="cms-plugin cms-plugin-92">Celkový priestor: <strong>70m</strong><sup><strong>2</strong> </sup></li>
                                            <li class="cms-plugin cms-plugin-92">Rozloha pódia: <strong>5m × 3m</strong></li>
                                            <li class="cms-plugin cms-plugin-92">Veľkosť projekčného plátna: <strong>4m × 2m</strong></li>
                                            <li class="cms-plugin cms-plugin-92">Projektor: <strong>Optoma HD141X 1080p</strong></li>
                                        </ul>

                                        <p class="cms-plugin cms-plugin-92"> </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <img src="/img/floor_plan.png__1314x748_q85_subsampling-2.png"
                                             alt=""
                                             class="img-fluid"
                                        >
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col">
                                        <h1><strong>OTVÁRACIE HODINY</strong></h1>

                                        <p>ŠTVRTOK — SOBOTA<br>
                                            14:00 — 19:00</p>

                                        <p>+ počas akcií</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="dedication">
                <p>Program kultúrneho centra Diera do sveta je podporovaný z verejných zdrojov Slovenskej republiky Fondom na podporu umenia, ktorý je hlavným partnerom projektu, programom Aktívna komunita Nadácie Orange, a doplnkovou podnikateľskou činnosťou - kaviareň a špecializované kníhkupectvo - o.z. Diera do sveta.</p>
            </div>

            <!-- LOGOS -->
            <div id="logos" class="row" style="">
                <div class="logo col-md-4 col-12" style="">
                    <img class="" style="width:90%" src="/img/elipsa_logo_napis.svg" />
                </div>
                <div class="logo col-md-4 col-12" style="">
                    <img class="" style="width:90%" src="/img/FPU_logo_modre.png" />
                </div>
                <div class="logo col-md-4 col-12" style="">
                    <img class="" style="width:90%;" src="/img/orange_foundation_logo.svg" />
                </div>
            </div>
        </div>
        <!-- </div> -->
    </MainLayout>
</template>

<style scoped>
@import "../../css/about.css";
@import "../../css/galleries.css";
</style>
