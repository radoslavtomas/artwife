<script setup>
import { Head, usePage } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value
const event = computed(() => usePage().props.event).value.data

let data = {
    date_start: null,
    time_start: null,
    date_end: null,
    time_end: null,
    hero_img: null,
    title: null,
    body: null,
    place: null,
}

data.date_start = event.date_start
data.time_start = event.time_start
data.date_end = event.date_end
data.date_end = event.date_end
data.title = getLocaleVersion(event.title, locale).title
data.body = getLocaleVersion(event.body, locale).body
data.hero_img = event.image
data.place = getLocaleVersion(event.place, locale).place

onMounted(() => {
    console.log(event)
})
</script>

<template>
    <MainLayout>
        <Head :title="data.title" />

        <div id="event" class="card p-2">
            <div class="row g-0">
                <div class="col">
                    <div
                        class="teaser-img-container-large"
                        :style="{ backgroundImage: 'url(' + `/storage/${data.hero_img}` + ')' }"
                    ></div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="row schedule" style="border-bottom: 2px solid black;border-top:none;">
                        <div class="col pl-0 fs-2 day" style="text-align:left;">
                            {{ data.date_start }}
                        </div>
                        <div class="col pr-0 fs-2 time" style="text-align:right;">
                            {{ data.time_start }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col teaser-text-container">
                    <div class="card-body h-100 p-0 pt-3">
                        <h1 class="display-2 lh-1 card-title">{{ data.title }}</h1>
                        <h6 class="h4 mb-4"><em>→ {{ data.place }}</em></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div v-html="data.body"></div>
                </div>
            </div>

        </div>

    </MainLayout>
</template>

<style scoped>

</style>
