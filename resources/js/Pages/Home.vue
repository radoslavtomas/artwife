<script setup>
import { Head, usePage } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value
const page = computed(() => usePage().props.page).value.data
const edition = computed(() => usePage().props.edition).value.data
const events = computed(() => usePage().props.events).value.data
const title = locale === 'sk' ? 'Domov' : 'Home'

let data = {
    name: null,
    body: null,
    hero_img: null,
    editions: null,
}

data.name = getLocaleVersion(page.name, locale).name
data.body = getLocaleVersion(page.body, locale).body

onMounted(() => {
    console.log(data)
    console.log(edition)
    console.log(events)
})

</script>

<template>
    <MainLayout>
        <Head :title="title" />

        <a  href="/program/ai-kreativita/" class="marquee" style="text-decoration:none">
            <div class="marquee__content">
                <span class="fs-2">next event → AI &amp; kreativita → Stvrtok 16:00 →</span>
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            </div>

            <!-- Mirrors the content above -->
            <div class="marquee__content" aria-hidden="true">
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
                <span class="fs-2">next event → AI &amp; kreativita → Piatok 16:00 →</span>
            </div>
        </a>

        <!-- Teasers for featured events and articles -->
        <div id="featured">



            <div class="row gx-2 gy-2">
                <!-- teasers -->


                <div class="col-12">




                    <a class="hp-teaser" href="/program/spiritualita-v-sucasnom-umeni/">
                        <article class="hp-teaser-content p-2">
                            <div
                                class="teaser-img-container"
                                style="background-image: url('/img/spiritualita_event.png__600x400_q85_crop_subsampling-2_upscale.jpg')"
                            >

                            </div>

                            <div class="teaser-body-container fs-3">
                                <header class="pb-3">
                                    <h2 class="display-3 lh-1">SPIRITUALITA V SÚČASNOM UMENÍ</h2>
                                </header>
                                <p>Ako súčasné umenie uvažuje o duchovných otázkach a môže byť umenie novodobým duchovnom? </p>
                            </div>

                            <!-- TEASER FOOTER (FOR EVENTS ONLY) -->

                            <footer>
                                <div class="row schedule">
                                    <div class="col fs-3 day" style="text-align:left;">
                                        16.4.
                                    </div>
                                    <div class="col fs-3 time" style="text-align:right;">
                                        18:00
                                    </div>
                                </div>
                            </footer>



                        </article>
                    </a>

                </div>
            </div>
        </div>

        <div id="festival">
            <!-- TEASER IMAGE -->
            <div
                class="teaser-img-container-large"
                :style="{ backgroundImage: 'url(' + `/storage/${edition.image}` + ')' }"
            ></div>


            <!-- FESTIVAL TITLE -->
            <header id="festival-title">
                <h1 class="display-2 lh-1">{{ data.name }}</h1>
            </header>

            <!-- FESTIVAL BODY -->
            <div id="festival-body" class="fs-3 lh-sm">
                <div v-html="data.body"></div>
            </div>
        </div>

    </MainLayout>
</template>

<style scoped>
@import "../../css/home.css";
@import "../../css/festival.css";
@import "../../css/utilities.css";

#festival {
    margin-bottom: 40px;
}

</style>
