<script setup>
import { onMounted } from 'vue'
import Navigation from '@/Components/Navigation.vue'
import TheFooter from '@/Components/TheFooter.vue'

onMounted(() => console.log('Hi from main'))
</script>

<template>
    <header>
        <Navigation />
    </header>

    <main>
        <slot />
    </main>

    <footer id="site-footer">
        <TheFooter />
    </footer>
</template>

<style scoped>

</style>
