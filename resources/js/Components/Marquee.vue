<script setup>
import { computed } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value

const props = defineProps({
    event: Object
})

const title = getLocaleVersion(props.event.title, locale).title


</script>

<template>
    <Link  :href="`/program/${props.year}/${props.event.slug}`" class="marquee" style="text-decoration:none">
        <div class="marquee__content">
            <span v-for="i in 4" :key="i" class="fs-2">next event → {{ title }} → {{ props.event.date_start_day }} {{ props.event.time_start }} →</span>
        </div>

        <!-- Mirrors the content above -->
        <div class="marquee__content" aria-hidden="true">
            <span v-for="i in 4" :key="i" class="fs-2">next event → {{ title }} → {{ props.event.date_start_day }} {{ props.event.time_start }} →</span>
        </div>
    </Link>
</template>

<style scoped>

</style>
