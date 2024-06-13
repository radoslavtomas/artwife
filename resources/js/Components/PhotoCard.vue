<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale)

const props = defineProps({
    person: Object
})
</script>

<template>
    <div class="photo-card col">
        <header>
            <div class="photo-card-header" style="background-position: center;background-size: cover;"
                 :style="{ backgroundImage: 'url(' + `/storage/${person.avatar}` + ')' }">
            </div>
        </header>
        <main>
            <h5 class="m-0">{{ person.full_name}}</h5>
            <p class="m-0 font-weigth500">{{ getLocaleVersion(person.title, locale).title }}</p>
            <!--        <p>-->
            <!--            <a href="mailto:ivana@festanca.sk">ivana@festanca.sk</a>-->
            <!--        </p>-->
        </main>
    </div>
</template>

<style scoped>
.photo-card {
    box-sizing: border-box;
    display: flex;
    align-items: center;
    font-weight: 400;
    position: relative;
    text-align: left;
    width: 624px;
}

.photo-card-header {
    width: 120px;
    height: 120px;
    border: 4px solid rgb(45, 79, 143);
    margin: 25px 35px 50px 0;
    border-radius: 100px;
}
</style>
