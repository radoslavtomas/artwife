<script setup>
import { Head, usePage } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'
// import EventCardLarge from '@/Components/EventCardLarge.vue'
// import Marquee from '@/Components/Marquee.vue'

const locale = computed(() => usePage().props.locale).value
const page = computed(() => usePage().props.page).value.data
// const edition = computed(() => usePage().props.edition).value.data
// const events = computed(() => usePage().props.events).value.data
const title = locale === 'sk' ? 'Domov' : 'Home'

let data = {
    page: {
        name: null,
        body: null,
    },
    edition: {
        name: null,
        body: null,
    },
    hero_img: null,
}

data.page.name = getLocaleVersion(page.name, locale).name
data.page.body = getLocaleVersion(page.body, locale).body

// data.edition.name = getLocaleVersion(edition.title, locale).title
// data.edition.body = getLocaleVersion(edition.body, locale).body

onMounted(() => {
    // console.log(data)
    // console.log(edition)
    // console.log(events)
})

</script>

<template>
    <MainLayout>
        <Head :title="title" />

<!--        <Marquee v-if="events.length" :event="events[0]" />-->

        <!-- Teasers for featured events and articles -->
<!--        <div id="featured" v-if="events.length">-->
<!--            &lt;!&ndash; teasers &ndash;&gt;-->
<!--            <div class="row gx-2 gy-2">-->
<!--                <EventCardLarge-->
<!--                    v-for="event in events"-->
<!--                    :event="event"-->
<!--                    :year="edition.year"-->
<!--                    :key="event.id"-->
<!--                />-->
<!--            </div>-->
<!--        </div>-->

        <div id="festival">
<!--            &lt;!&ndash; TEASER IMAGE &ndash;&gt;-->
<!--            <div-->
<!--                class="teaser-img-container-large"-->
<!--                :style="{ backgroundImage: 'url(' + `/storage/${edition.image}` + ')' }"-->
<!--            ></div>-->

            <!-- CURRENT YEAR TITLE -->
<!--            <header id="festival-title">-->
<!--                <h1 class="display-2 lh-1">Artwife {{edition.year }}: {{ data.edition.name }}</h1>-->
<!--            </header>-->

            <!-- CURRENT YEAR BODY -->
<!--            <div id="festival-body" class="fs-3 lh-sm">-->
<!--                <div v-html="data.edition.body"></div>-->
<!--            </div>-->

<!--            <br>-->

            <!-- FESTIVAL TITLE -->
            <header id="festival-title">
                <h1 class="display-2 lh-1">{{ data.page.name }}</h1>
            </header>

            <!-- FESTIVAL BODY -->
            <div id="festival-body" class="fs-3 lh-sm">
                <div class="wysiwyg" v-html="data.page.body"></div>
            </div>
        </div>

    </MainLayout>
</template>

<style scoped>

</style>
