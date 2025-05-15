<script setup>
import { Head, usePage, Link } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'
import EventCard from '@/Components/EventCard.vue'
import ReviewCard from '@/Components/ReviewCard.vue'

const locale = computed(() => usePage().props.locale).value
const edition = computed(() => usePage().props.edition).value.data
const events = computed(() => usePage().props.events).value.data
const reviews = computed(() => usePage().props.reviews).value.data


let data = {
    edition_key: null,
    title: null,
    body: null,
    year: null,
    hero_img: null,
    no_events: locale === 'sk' ? 'Zatiaľ žiadne eventy, program len pripravujeme...' : 'No events yet, we are working on it...',
    reviews_title: locale === 'sk' ? 'Recenzie' : 'Reviews'
}


data.edition_key = edition.edition_key
data.title = getLocaleVersion(edition.title, locale).title
data.body = getLocaleVersion(edition.body, locale).body
data.year = edition.year
data.hero_img = edition.image

onMounted(() => {
    console.log(reviews)
    console.log(reviews.length)
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
            <header id="festival-title" class="display-2 mb-1">
                <Link href="/festival">ArtWife</Link> / <span class="uppercase">ARTWIFE {{ data.year }}: {{ data.title }}</span>
            </header>

            <!-- FESTIVAL YEAR BODY -->
            <div id="festival-body" class="fs-3 lh-sm wysiwyg" v-html="data.body">
            </div>
        </div>

        <div id="reviews-title" v-if="reviews.length" class="app-panel">
            <!-- REVIEWS TITLE -->
            <div class="app-title display-2">
                <span class="uppercase">{{ data.reviews_title }}</span>
            </div>
        </div>

        <div v-if="reviews.length" class="card-container">

            <div class="row g-2">
                <ReviewCard
                    v-for="review in reviews"
                    :review="review"
                    :key="review.id"
                />
            </div>
        </div>

        <div id="program-title" class="app-panel">
            <!-- REVIEWS TITLE -->
            <header class="app-title display-2 lh-1">
                <span class="uppercase">Program</span>
            </header>
        </div>


        <!-- FESTIVAL YEAR PROGRAMMING -->
        <div class="card-container mt-2">

            <div v-if="events.length === 0" class="col-12">
                <div class="card p-2">
                    {{ data.no_events }}
                </div>
            </div>

            <div v-else class="row g-2">

                <EventCard
                    v-for="event in events"
                    :event="event"
                    :year="edition.year"
                    :key="event.id"
                />

            </div>
        </div>
    </MainLayout>
</template>

<style scoped>
</style>
