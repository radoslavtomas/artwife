<script setup>
import { usePage } from '@inertiajs/vue3'
import { computed, onMounted, ref } from 'vue'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value
const translations = computed(() => usePage().props.translations).value

// Create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// Read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Set cookie consent
function acceptCookieConsent(){
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 30);
    document.getElementById("cookie-notice").style.display = "none";
}

const accepted = ref(false)

onMounted(() => {
    let cookie_consent = getCookie("user_cookie_consent");

    if(cookie_consent !== ""){
        accepted.value = true
    }
})
</script>

<template>
    <div id="cookie-notice" v-show="!accepted">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md">
                    <p>
                        {{ getLocaleVersion(translations['cookie_message'], locale).value }}
                    </p>
                </div>
                <div class="col-3 col-md" style="text-align:center">
                    <button class="" @click="acceptCookieConsent">
                        {{ getLocaleVersion(translations['cookie_accept'], locale).value }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
