<script setup>
import { Head, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import MainLayout from '@/Layouts/MainLayout.vue'
import FestivalYearCard from '@/Components/FestivalYearCard.vue'

const editions = computed(() => usePage().props.editions).value.data

let data = {
    hero_img: null,
    editions: null,
}

data.hero_img = editions[0].image // will always be sorted by year desc from server
data.editions = editions
</script>

<template>
    <MainLayout>
        <Head title="Festival" />

        <!-- FESTIVAL YEARS -->
        <div id="festival-years" class="mt-4 pt-2">
            <div id="festival-years-grid" class="row gx-2 gy-2">

                <FestivalYearCard v-for="edition in editions" :key="edition.id" :edition="edition" />

            </div>
        </div>

    </MainLayout>
</template>

<style scoped>

</style>
