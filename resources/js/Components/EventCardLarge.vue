<script setup>
import { computed } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value

const props = defineProps({
    event: Object,
    year: Number
})

const title = getLocaleVersion(props.event.title, locale).title
const teaser = getLocaleVersion(props.event.teaser, locale).teaser

</script>

<template>
    <div class="col-12">
        <Link class="hp-teaser" :href="`/program/${props.year}/${props.event.slug}`">
            <article class="hp-teaser-content p-2">
                <div
                    class="teaser-img-container"
                    :style="{ backgroundImage: 'url(' + `/storage/${props.event.image}` + ')' }"
                >
                </div>

                <div class="teaser-body-container fs-3">
                    <header :class="props.event.place ? '' : 'pb-3'">
                        <h2 class="display-3 lh-1 text-uppercase">{{ title }}</h2>
                    </header>
                    <p>Prednaska</p>
                    <p v-if="props.event.place" class="h6 pb-2">{{ props.event.place }}</p>
                    <p>{{ teaser }}</p>
                </div>

                <!-- TEASER FOOTER (FOR EVENTS ONLY) -->
                <footer>
                    <div class="row schedule">
                        <div class="col fs-3 day" style="text-align:left;">
                            {{ props.event.date_start }}
                        </div>
                        <div class="col fs-3 time" style="text-align:right;">
                            {{ props.event.time_start }}
                        </div>
                    </div>
                </footer>
            </article>
        </Link>
    </div>
</template>

<style scoped>

</style>
