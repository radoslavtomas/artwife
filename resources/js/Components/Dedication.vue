<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value

const props = defineProps({
    page: Object
})

const body = getLocaleVersion(props.page.body, locale).body
</script>

<template>
<!--    <div id="dedication">-->
<!--        <div v-html="body"></div>-->
<!--    </div>-->

    <!-- LOGOS -->
    <div id="logos" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 t-4 pt-4" style="">
        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%" src="/img/elipsa_logo_napis.svg" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%" src="/img/FPU_logo_modre.png" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/orange_foundation_logo.svg" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/aspekt_logo.png" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/glosolalia_logo.png" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/lgpmb_logo.png" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/moment_logo.png" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/perform_europe_logo.png" />
        </div>

        <div class="logo p-4 d-flex justify-content-center align-items-center" style="">
            <img class="" style="width:90%;" src="/img/ponton_logo.png" />
        </div>
    </div>
</template>

<style scoped>

</style>
