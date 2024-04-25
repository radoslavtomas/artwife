<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    edition: Object
})
</script>

<template>
    <div class="col-12 col-md-6 col-lg-6">
        <Link :href="`/program/${edition.year}`">

            <div class="card teaser-card teaser-img-container-edition"
                 :style="{ backgroundImage: 'url(' + `/storage/${edition.image}` + ')' }">

                <div class="card-img-overlay edition-overlay">
                    <div class="center">
                        <div id="year" class="display-3">
                            {{ edition.year }}
                        </div>
                    </div>
                </div>
            </div>

        </Link>
    </div>
</template>

<style scoped>

</style>
