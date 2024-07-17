<script setup>
import { Head, usePage } from '@inertiajs/vue3'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'
import MainLayout from '@/Layouts/MainLayout.vue'
// import TeamCarousel from '@/Components/TeamCarousel.vue'
// import TeamList from '@/Components/TeamList.vue'
// import Bookshop from '@/Components/Bookshop.vue'
import DieraSpace from '@/Components/DieraSpace.vue'
import Dedication from '@/Components/Dedication.vue'
// import PhotoCard from '@/Components/PhotoCard.vue'

const locale = computed(() => usePage().props.locale)
const pages = computed(() => usePage().props.pages).value.data
const people = computed(() => usePage().props.people).value.data

let data = {
    name: null,
    body: null,
    hours: {
        name: null,
        body: null
    }
}

const aboutPage = pages.filter((page) => page.page_key === 'about')[0];
// const openingHoursPage = pages.filter((page) => page.page_key === 'openingHours')[0];
// const spacePage = pages.filter((page) => page.page_key === 'space')[0];
const supportPage = pages.filter((page) => page.page_key === 'support')[0];

data.name = getLocaleVersion(aboutPage.name, locale.value).name
data.body = getLocaleVersion(aboutPage.body, locale.value).body

onMounted(() => {
    // console.log(people)
})

</script>

<template>
    <MainLayout>
        <Head :title="data.name" />

        <div id="about" class="">
            <!-- gallery of members of diera -->
<!--            <TeamCarousel :people="people"/>-->

            <h1>{{ data.name }}</h1>

            <div id="about-content">
                <div v-html="data.body" />

                <br>

                <div id="about-photos">
                    <div class="container">

                        <div class="photo-gallery">
                            <div class="photo-card" v-for="(person, index) in people" :key="index">

                                <div class="photo-card-header" style="background-position: center;background-size: cover;"
                                     :style="{ backgroundImage: 'url(' + `/storage/${person.avatar}` + ')' }">
                                </div>

                                <div class="photo-card-body">
                                    <p class="m-0">{{ person.full_name}}</p>
                                    <p class="m-0">{{ getLocaleVersion(person.title, locale).title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

<!--                <div id="about-sections" class="row">-->
<!--                    <div class="col col-sm-11 col-md-11 col-lg-4">-->
<!--                        <Bookshop :page="bookstorePage" />-->
<!--                    </div>-->

<!--                    <div class="col col-sm-11 col-md-11 col-lg-3">-->
<!--                        <TeamList :people="people" />-->
<!--                    </div>-->

<!--                    <div class="col-11">-->
<!--                        <DieraSpace :page="spacePage"/>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

            <br>
            <Dedication :page="supportPage"/>
            <br>
        </div>
    </MainLayout>
</template>

<style>
.photo-gallery {
    display: flex;
    flex-wrap: wrap;
}

.photo-card {
    display: flex;
    align-items: center;
    font-weight: 400;
    position: relative;
    text-align: left;
    margin: 0 15px;
    width: 45%;
}

.photo-card-header {
    width: 100px;
    height: 100px;
    border: 4px solid rgb(45, 79, 143);
    margin: 25px 25px 25px 0;
    border-radius: 100px;
}

.photo-card-body {
    width: calc(100% - 125px);
}

.photo-card-body p {
    font-size: 20px !important;
}

@media screen and (max-width: 768px) {
    .photo-card {
        width: 100%;
    }
}
</style>
