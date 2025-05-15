<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'
import { computed } from 'vue'

const props = defineProps({
    review: Object,
})

</script>

<template>
    <div class="col-12">
        <Link :href="`/reviews/${review.slug}`">
            <div class="card p-2 h-100">

                <div class="card-body event-card p-0 fs-3 lh-sm">
                    <header>
                        <h2 class="fs-1 lh-1 text-uppercase">{{ review.title }}</h2>
                    </header>
                    <p class="h4 pb-2">{{ review.source }}</p>
                    <p class="h5 pb-2 italic">{{ review.author }}</p>
                    <p class="pb-2">{{ review.teaser }}</p>
                </div>

            </div>
        </Link>
    </div>
</template>

<style scoped>

</style>
