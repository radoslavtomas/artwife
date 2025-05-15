<script setup>
import Navigation from '@/Components/Navigation.vue'
import TheFooter from '@/Components/TheFooter.vue'
import CookieConsent from '@/Components/CookieConsent.vue'

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

    <CookieConsent />
</template>

<style>
@import "../../css/home.css";
@import "../../css/festival.css";
@import "../../css/about.css";
@import "../../css/festival_year.css";
@import "../../css/event.css";
@import "../../css/utilities.css";

#festival {
    margin-bottom: 30px;
}

</style>
