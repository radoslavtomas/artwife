<script setup>
import { computed, onMounted } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale)

const props = defineProps({
    people: Object
})

onMounted(() => {
    // start carousel
    const el = document.getElementsByClassName('carousel-control-next')[0]
    setTimeout(() => {
        el.click()
    }, 2500)
})

</script>

<template>
    <!-- SLIDER -->
    <div class="gallery-slider">
        <div class="slider-body">
            <div id="carousel-gallery-" class="carousel slide" data-bs-ride="carousel" style="padding:0px;">
                <!-- Photos -->
                <div class="carousel-inner">
                    <!-- Person -->
                    <div
                        v-for="(person, index) in people"
                        :key="person.id"
                        :class="index === 0 ? 'carousel-item active' : 'carousel-item'"
                        data-bs-interval="2500" >

                        <div class="image-container">
                            <img :src="`/storage/${person.avatar}`" style="cursor:auto">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h4>{{ person.full_name }}</h4>
                            <p><em>{{ getLocaleVersion(person.title, locale).title }}</em></p>
                        </div>
                    </div>
                </div>

                <!-- Prev/Next Controls -->
                <button type="button" class="carousel-control-prev" data-bs-target="#carousel-gallery-" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button type="button" class="carousel-control-next" data-bs-target="#carousel-gallery-" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
@import "../../css/galleries.css";
</style>
