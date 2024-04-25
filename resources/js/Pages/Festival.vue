<script setup>
import { Head, usePage, Link } from '@inertiajs/vue3'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'
import MainLayout from '@/Layouts/MainLayout.vue'
import FestivalYearCard from '@/Components/FestivalYearCard.vue'

const locale = computed(() => usePage().props.locale).value
const page = computed(() => usePage().props.page).value.data
const editions = computed(() => usePage().props.editions).value.data

let data = {
    page_key: null,
    name: null,
    body: null,
    hero_img: null,
    editions: null,
}

data.page_key = page.page_key
data.name = getLocaleVersion(page.name, locale).name
data.body = getLocaleVersion(page.body, locale).body
data.hero_img = editions[0].image // wil be always sorted by year desc from server
data.editions = editions
</script>

<template>
    <MainLayout>
        <Head title="Festival" />

        <div id="festival">
            <!-- TEASER IMAGE -->
            <div
                class="teaser-img-container-large"
                :style="{ backgroundImage: 'url(' + `/storage/${data.hero_img}` + ')' }"
            ></div>

            <!-- FESTIVAL TITLE -->
            <header id="festival-title">
                <h1 class="display-2 lh-1">{{ data.name }}</h1>
            </header>

            <!-- FESTIVAL BODY -->
            <div
                id="festival-body"
                class="fs-3 lh-sm"
                v-html="data.body">
            </div>
        </div>

        <!-- FESTIVAL YEARS -->
        <div id="festival-years" class="mt-2">
            <div id="festival-years-grid" class="row gx-2 gy-2">

                <FestivalYearCard v-for="edition in editions" :key="edition.id" :edition="edition" />

            </div>
        </div>

    </MainLayout>
</template>

<style scoped>

</style>
