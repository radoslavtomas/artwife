<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'
import { computed } from 'vue'

const locale = computed(() => usePage().props.locale).value

const props = defineProps({
    event: Object,
    year: Number,
})

const title = getLocaleVersion(props.event.title, locale).title

</script>

<template>
    <div class="col-12 col-md-6 col-lg-4">
        <Link :href="`/program/${year}/${event.slug}`">
            <div class="card p-2 h-100">

                <!-- EVENT TEASER IMAGE -->
                <div
                    class="teaser-img-container-program"
                    :style="{ backgroundImage: 'url(' + `/storage/${event.image}` + ')' }"
                ></div>

                <div class="card-body p-0 fs-3 lh-sm">
                    <!-- EVENT TITLE -->
                    <header><h2 class="fs-1 lh-1 text-uppercase">{{ title }}</h2></header>
                </div>

                <div class="card-footer fs-4 teaser-footer p-0 m-1">
                    <div class="row">
                        <div class="col">
                            <span class="m-0 mt-1">{{ event.date_start }}</span>
                        </div>
                        <div class="col" style="text-align:right;">
                            <span class="m-0 mt-1">{{ event.time_start }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </Link>
    </div>
</template>

<style scoped>

</style>
