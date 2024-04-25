<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale)

const props = defineProps({
    people: Object
})

const title = {
    'sk': 'Kolektív',
    'en': 'Collective',
}

</script>

<template>
    <div class="card">
        <div class="card-header">
            <h2><strong>{{ title[locale] }}</strong></h2>
        </div>

        <div class="card-body">
            <ul id="collective-list" style="">
                <li
                    v-for="person in people"
                    :key="person.id"
                    class="cms-plugin cms-plugin-92"
                    style="line-height: 1;"
                >
                    <strong>{{ person.full_name }}</strong>
                    <ul style="">
                        <li class="cms-plugin cms-plugin-92" style="line-height: 1;">{{ getLocaleVersion(person.title, locale).title }}</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>

</style>
