<script setup>
import { computed, onMounted } from 'vue'
import { usePage, Link } from '@inertiajs/vue3'
import { getLocaleVersion } from '@/helpers/index.js'

const locale = computed(() => usePage().props.locale).value
const contacts = computed(() => usePage().props.contacts).value.data
const settings = computed(() => usePage().props.settings).value
const translations = computed(() => usePage().props.translations).value

onMounted(() => {
    // console.log(settings)
    // console.log(translations)
})
</script>

<template>
    <!-- FOOTER -->

        <div id="page-footer" class="container">
            <div class="container">

                <!-- Contacts, address, banking and partner -->
                <div class="row">

                    <!-- Left side of the footer -->
                    <div id="footer-left" class="col-auto">
                        <div class="row">

                            <!-- Contacts -->
                            <div id="footer-contacts" class="col-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="margin-bottom: 20px;">
                                            <b class="text-uppercase">{{ getLocaleVersion(translations['contacts'], locale).value }}</b>
                                            <div class="text-muted" style="line-height:1.1;">
                                                {{ settings['main_email'] }}
                                            </div>
                                        </div>

                                        <ul class="list-group" style="list-style: none;" >

                                            <li v-for="person in contacts"
                                                :key="person.id"
                                                class=""
                                                style="line-height:1.1; margin-bottom: 10px;">
                                                <b>{{ person.full_name }}</b>
                                                <br>
                                                &nbsp &nbsp
                                                {{ person.phone }}
                                            </li>

                                        </ul>
                                    </div>  <!-- /card-body -->
                                </div>  <!-- /card -->
                            </div>  <!-- /footer-contacts -->

                            <!-- Address -->
                            <div id="footer-address" class="col-auto">

                                <!-- Operation -->
                                <div class="row">
                                    <div class="col">
                                        <div class="card" style="margin-bottom: 20px;">
                                            <div class="card-body">
                                                <b class="text-uppercase">{{ getLocaleVersion(translations['operation_premisses'], locale).value }}</b>
                                                <div style="line-height:1.1">
                                                    {{ settings['operation_address_line_1'] }} •
                                                    {{ settings['operation_address_postcode'] }},
                                                    {{ settings['operation_address_city'] }} •
                                                    {{ getLocaleVersion(translations['slovakia'], locale).value }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <!-- /operation row -->

                                <!-- Registered office -->
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <b class="text-uppercase">{{ getLocaleVersion(translations['registered_office'], locale).value }}</b>
                                                <div style="line-height:1.1">
                                                    {{ settings['office_address_title'] }} •
                                                    {{ settings['office_address_line_1'] }} •
                                                    {{ settings['office_address_postcode'] }},
                                                    {{ settings['office_address_city'] }} •
                                                    {{ getLocaleVersion(translations['slovakia'], locale).value }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  <!-- /registered-office row -->

                            </div>  <!-- /address col -->
                        </div>
                    </div>  <!-- /left-footer col -->

                    <!-- Right side of the footer -->
                    <div id="footer-right" class="col-auto">
                        <div class="row">

                            <div id="footer-banking" class="col-auto"> <!-- Banking -->

                                <div class="row"> <!-- ICODICO -->

                                    <div class="col">

                                        <div class="card" style="margin-bottom: 20px;">

                                            <div class="card-body">
                                                <div style="line-height:1.1">
                                                    <b>IČO:</b> {{ settings['ico'] }}
                                                    <br>
                                                    <b>DIČ:</b> {{ settings['dic'] }}
                                                    <br>
                                                    {{ getLocaleVersion(translations['vat_message'], locale).value }}
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>  <!-- /ICODICO -->

                                <div class="row"> <!-- Bank account -->
                                    <div class="col">

                                        <div class="card" style="margin-bottom: 20px;">
                                            <div class="card-body">
                                                <b class="text-uppercase">{{ getLocaleVersion(translations['bank_account'], locale).value }}</b>
                                                <div style="line-height:1.1">
                                                    Banka: {{ settings['bank'] }}
                                                    <br>
                                                    IBAN: <span style="font-size:11px;">{{ settings['iban'] }}</span>
                                                    <br>
                                                    BIC/SWIFT: {{ settings['bic_swift'] }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>  <!-- /bank account row -->

                            </div>

                            <!-- Partner -->
                            <div id="footer-partner" class="col-auto">

                                <div class="row">  <!-- FPU dedication -->
                                    <div class="col">
                                        <div class="card" style="">
                                            <div id="fpu-ded" class="card-body">
                                                <div style="line-height:1;font-size:13px;">
                                                    <span v-html="getLocaleVersion(translations['fpu_support'], locale).value"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div id="fpu-logo">
                                            <img id="fpu-logo" src="/img/FPU_logo_modre.png" style="width:100%">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">  <!-- Orange dedication -->
                                    <div class="col">
                                        <div class="card" style="">
                                            <div id="orange-ded" class="card-body">
                                                <div style="line-height:1;font-size:13px;">
                                                    <span v-html="getLocaleVersion(translations['orange_support'], locale).value"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div id="orange-logo">
                                            <img id="orange-logo" src="/img/orange_foundation_logo.svg" style="width:100%">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div id="copyright" class="row">

                    <div class="col-12">
                        &copy; Copyright Diera do sveta {{ new Date().getFullYear() }}. {{ getLocaleVersion(translations['copyright'], locale).value }} <Link href="/privacy">GDPR</Link>.
                    </div>

                    <div class="col-12">
                        <b>dizajn:</b> <a href="http://www.bobaxbasa.com/">boba</a>
                    </div>

                </div>
            </div>
        </div>
</template>

<style scoped>

</style>
