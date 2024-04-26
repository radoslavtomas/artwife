<script setup>
import { Head, usePage } from '@inertiajs/vue3'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'
import MainLayout from '@/Layouts/MainLayout.vue'
import TeamCarousel from '@/Components/TeamCarousel.vue'
import TeamList from '@/Components/TeamList.vue'
import Bookshop from '@/Components/Bookshop.vue'
import DieraSpace from '@/Components/DieraSpace.vue'
import Dedication from '@/Components/Dedication.vue'

const locale = computed(() => usePage().props.locale)
const pages = computed(() => usePage().props.pages).value.data
const people = computed(() => usePage().props.people).value.data

let data = {
    name: null,
    body: null
}

const aboutPage = pages.filter((page) => page.page_key === 'about')[0];
const bookstorePage = pages.filter((page) => page.page_key === 'bookstore')[0];
const spacePage = pages.filter((page) => page.page_key === 'space')[0];
const supportPage = pages.filter((page) => page.page_key === 'support')[0];

data.name = getLocaleVersion(aboutPage.name, locale.value).name
data.body = getLocaleVersion(aboutPage.body, locale.value).body

onMounted(() => {
    // console.log(bookstorePage)
})

</script>

<template>
    <MainLayout>
        <Head title="About" />

        <div id="about" class="">
            <!-- gallery of members of diera -->
            <TeamCarousel :people="people"/>

            <h1>{{ data.name }}</h1>

            <div id="about-content">
                <div v-html="data.body" />

                <div id="about-sections" class="row">
                    <div class="col col-sm-11 col-md-11 col-lg-4">
                        <Bookshop :page="bookstorePage" />
                    </div>

                    <div class="col col-sm-11 col-md-11 col-lg-3">
                        <TeamList :people="people" />
                    </div>

                    <div class="col col-sm-11 col-md-11 col-lg-3">
                        <DieraSpace :page="spacePage"/>
                    </div>
                </div>
            </div>

            <Dedication :page="supportPage"/>
        </div>
    </MainLayout>
</template>

<style scoped>
</style>
