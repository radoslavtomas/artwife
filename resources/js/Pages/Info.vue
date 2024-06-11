<script setup>

import { Head, usePage } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { computed, onMounted } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value
const page = computed(() => usePage().props.page).value.data

const name = getLocaleVersion(page.name, locale).name
const body = getLocaleVersion(page.body, locale).body

onMounted(() => {
    console.log(page)
})

</script>

<template>
    <MainLayout>
        <Head title="Program" />

        <div id="festival">
            <!-- FESTIVAL TITLE -->
            <header id="festival-title">
                <h1 class="display-2 lh-1">{{ name }}</h1>
            </header>

            <!-- FESTIVAL BODY -->
            <div id="festival-body" class="fs-3 lh-sm">
                <div v-html="body"></div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
