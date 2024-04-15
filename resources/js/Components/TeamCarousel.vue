<script setup>

</script>

<template>
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
</template>

<style scoped>
@import "../../css/galleries.css";
</style>
