<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value

const props = defineProps({
    page: Object
})

const name = getLocaleVersion(props.page.name, locale).name
const body = getLocaleVersion(props.page.body, locale).body

</script>

<template>
    <div class="card">
        <div class="card-header">
            <h2><strong>{{ name }}</strong></h2>
        </div>

        <div class="card-body">
            <div class="wysiwyg" v-html="body"></div>
        </div>
    </div>
</template>

<style scoped>

</style>
