<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import { Head, Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const locale = computed(() => usePage().props.locale).value
const review = computed(() => usePage().props.review).value.data

let data = {
    reviews_title: locale === 'sk' ? 'Recenzia' : 'Review',
    button_back_text: locale === 'sk' ? 'Späť na Artwife ' + review.edition.year : 'Back to Artwife ' + review.edition.year,
    review_info: locale === 'sk' ? '(celá recenzia a viac)' : '(the whole review & more)'
}

</script>

<template>
    <MainLayout>
        <Head :title="review.title" />

<!--        <div class="app-panel mb-4">-->
<!--            &lt;!&ndash; REVIEWS TITLE &ndash;&gt;-->
<!--            <div class="app-title display-2 lh-1 mb-1">-->
<!--                <span class="uppercase">{{ data.reviews_title }}</span>-->
<!--            </div>-->
<!--        </div>-->

        <div id="event" class="card p-2">
            <div class="row">
                <div class="col teaser-text-container">
                    <div class="card-body h-100 p-0 pt-3">
                        <h1 class="display-2 card-title pl-2 pt-2 pb-1 mb-3 border-bottom border-2 border-black">{{ data.reviews_title }}</h1>

                        <h1 class="display-2 lh-1 card-title mb-3">{{ review.title }}</h1>

                        <div
                            class="teaser-img-container-large"
                            :style="{ backgroundImage: 'url(' + `/storage/${review.edition.image}` + ')' }"
                        ></div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">

                <h6 class="h4 mb-4">
                    <span v-if="review.source_link"><a target="_blank" :href="review.source_link">{{ review.source }}</a> <span class="text-muted">{{ data.review_info }}</span></span>
                    <span v-else>{{ review.source }} <span class="text-muted">{{ data.review_info }}</span></span>
                </h6>

                <h6 class="h4 mb-4">
                    <em>{{ review.author }}</em>
                </h6>

                <div class="col">
                    <div v-html="review.text"></div>
                </div>
            </div>
        </div>

        <div class="app-container mb-4 flex justify-end">
            <Link :href="`/program/${review.edition.year}`"><button>{{ data.button_back_text }}</button></Link>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
