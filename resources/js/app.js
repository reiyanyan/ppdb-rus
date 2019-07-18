/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css'
import axios from 'axios';
import VueAxios from 'vue-axios';

Vue.use(Vuetify, axios, VueAxios);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('toolbar', require('./components/scaffold/ToolbarComponent.vue').default);

//siswa
Vue.component('login-token', require('./components/student/auth/NoPendaftaran_Token.vue').default);
Vue.component('activate', require('./components/student/auth/Activate.vue').default);
Vue.component('activation', require('./components/student/auth/Activation.vue').default);
Vue.component('signin', require('./components/student/auth/SignIn.vue').default);
Vue.component('candidate-register', require('./components/student/CandidateRegister.vue').default);
Vue.component('candidate-preview', require('./components/student/CandidateRegister_Preview.vue').default);
Vue.component('dashboard', require('./components/student/Dashboard.vue').default);

//admin
Vue.component('pengaturan-pengguna', require('./components/admin/Index.vue').default);
//Penerima Pendaftarab
Vue.component('generate-token', require('./components/admin/penerima_pendaftaran/Generate_Token.vue').default);
Vue.component('cetak-kartu-pendaftaran', require('./components/admin/penerima_pendaftaran/Cetak_Kartu.vue').default);
//pengaturan_dashboard
Vue.component('pengaturan-dashboard', require('./components/admin/pengaturan_dashboard/Index.vue').default);
//pengaturan_ppdb
Vue.component('peruntukan', require('./components/admin/pengaturan_ppdb/Peruntukan.vue').default);
Vue.component('kustom-pertanyaan', require('./components/admin/pengaturan_ppdb/Kustom_Pertanyaan.vue').default);
    //pembobotan
    Vue.component('pembobotan-nilai', require('./components/admin/pengaturan_ppdb/pembobotan/Nilai.vue').default);
    Vue.component('pembobotan-akademik', require('./components/admin/pengaturan_ppdb/pembobotan/Akademik.vue').default);
    Vue.component('pembobotan-nonakademik', require('./components/admin/pengaturan_ppdb/pembobotan/NonAkademik.vue').default);
    Vue.component('pembobotan-kuota', require('./components/admin/pengaturan_ppdb/pembobotan/Kuota.vue').default);
    Vue.component('pembobotan-zona', require('./components/admin/pengaturan_ppdb/pembobotan/Zona.vue').default);

Vue.component('verifikasi-data', require('./components/admin/verifikasi_data/Index.vue').default);
    //Analisis Data
    Vue.component('formulasi-zonasi', require('./components/admin/analisis_data/zonasi/Formulasi.vue').default);
    Vue.component('approvement-zonasi', require('./components/admin/analisis_data/zonasi/Approvement.vue').default);
    Vue.component('formulasi-nonzonasi', require('./components/admin/analisis_data/non_zonasi/Formulasi.vue').default);
    Vue.component('approvement-nonzonasi', require('./components/admin/analisis_data/non_zonasi/Approvement.vue').default);

Vue.component('hasil-data', require('./components/admin/hasil_data/Index.vue').default);


const app = new Vue({
    el: '#app',
});
