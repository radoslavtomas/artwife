<script setup>
import Navigation from '@/Components/Navigation.vue'
import TheFooter from '@/Components/TheFooter.vue'

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

<style>
@import "../../css/festival.css";
@import "../../css/about.css";
@import "../../css/festival_year.css";
@import "../../css/event.css";
@import "../../css/utilities.css";

</style>
