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
const pages = computed(() => usePage().props.pages)
const people = computed(() => usePage().props.people).value.data

let about = {
    name: null,
    body: null
}

let nameAbout = pages.value.data.filter((page) => page.page_key === 'about')[0];
about.name = getLocaleVersion(nameAbout.name, locale.value).name

let bodyAbout = pages.value.data.filter((page) => page.page_key === 'about')[0];
about.body = getLocaleVersion(bodyAbout.body, locale.value).body

onMounted(() => {
    console.log(people)
})

</script>

<template>
    <MainLayout>
        <Head title="About" />

        <div id="about" class="">
            <!-- gallery of members of diera -->
            <TeamCarousel :people="people"/>

            <h1>
                {{ about.name }}
            </h1>

            <div id="about-content">
                <div v-html="about.body" />

                <div id="about-sections" class="row">
                    <div class="col col-sm-11 col-md-11 col-lg-4">
                        <Bookshop/>
                    </div>

                    <div class="col col-sm-11 col-md-11 col-lg-3">
                        <TeamList/>
                    </div>

                    <div class="col col-sm-11 col-md-11 col-lg-3">
                        <DieraSpace/>
                    </div>
                </div>
            </div>

            <Dedication/>
        </div>
        <!-- </div> -->
    </MainLayout>
</template>

<style scoped>
</style>
