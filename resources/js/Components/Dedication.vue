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
    <div id="dedication">
        <div v-html="body"></div>
    </div>

    <!-- LOGOS -->
    <div id="logos" class="row" style="">
        <div class="logo col-md-4 col-12" style="">
            <img class="" style="width:90%" src="/img/elipsa_logo_napis.svg" />
        </div>
        <div class="logo col-md-4 col-12" style="">
            <img class="" style="width:90%" src="/img/FPU_logo_modre.png" />
        </div>
        <div class="logo col-md-4 col-12" style="">
            <img class="" style="width:90%;" src="/img/orange_foundation_logo.svg" />
        </div>
    </div>
</template>

<style scoped>

</style>
