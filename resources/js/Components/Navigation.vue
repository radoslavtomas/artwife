<script setup>
import { computed, onMounted } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'

const page = usePage()

const locale = computed(() => page.props.locale)
const navigation = computed(() => page.props.navigation)

onMounted(() => console.log(locale.value))
</script>

<template>
    <nav id="main-menu" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <!-- SITE LOGO -->
            <Link class="navbar-brand pt-0 pb-0" href="/">
                <img src="/img/DIERA_ELIPSA.svg" />
            </Link>

            <!-- TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navLinks" class="collapse visible navbar-collapse navbarSupportedContent flex-grow-0">
                <!-- SITE SECTIONS -->
                <div class="mr-auto ml-auto mt-0 mb-0">
                    <ul class="navbar-nav">

                        <li v-for="(item, index) in navigation" :key="index" class="child nav-item">
                            <Link class="nav-link fs-3 text-uppercase" :href="item.route">{{ item.display_text }}</Link>
                        </li>

                        <li class="d-block d-lg-none socials-and-lang mt-2">
                            <div class="row">

                                <div class="col text-center">
                                    <a class="fs-3" target="_blank" href="https://www.facebook.com/dieradosveta">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </div>

                                <div class="col text-center">
                                    <a class="fs-3" target="_blank" href="https://www.instagram.com/dieradosveta/">
                                        <i class="fab fa-instagram-square"></i>
                                    </a>
                                </div>

                                <div class="col text-center">
                                    <a class="fs-3" target="_blank" href="https://www.youtube.com/channel/UC326HkT9w-FxK3ySvKfKxKQ">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>

                                <div class="col text-center">
                                    <span class="fs-3 fw-bold nav-item">
                                        <Link v-if="locale === 'en'" class="fs-3" :href="route('language', 'sk')">SK</Link>
                                        <Link v-if="locale === 'sk'" class="fs-3" :href="route('language', 'en')">EN</Link>
                                    </span>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="d-flex d-none d-lg-block socials-and-lang">
                <a class="fs-3" target="_blank" href="https://www.facebook.com/dieradosveta">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a class="fs-3" target="_blank" href="https://www.instagram.com/dieradosveta/">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a class="fs-3" target="_blank" href="https://www.youtube.com/channel/UC326HkT9w-FxK3ySvKfKxKQ">
                    <i class="fab fa-youtube"></i>
                </a>

                <span class="fs-3 fw-bold nav-item">
                    <Link v-if="locale === 'en'" class="fs-3" :href="route('language', 'sk')">SK</Link>
                    <Link v-if="locale === 'sk'" class="fs-3" :href="route('language', 'en')">EN</Link>
                </span>
            </div>

        </div>
    </nav>
</template>

<style scoped>

</style>
