<template>
    <div>
        <v-navigation-drawer v-if="guest == 0 && role != 1" v-model="drawer" clipped fixed app>
            <v-list dense>
                <!-- Pengaturan Pengguna -->
                <v-list-tile @click="openPengaturanPengguna">
                    <v-list-tile-action>
                        <v-icon v-if="this.$root.current_url == '/home'" color="indigo">verified_user</v-icon>
                        <v-icon v-else>verified_user</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            Pengaturan Pengguna
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <!-- Penerima Pendaftaran -->
                <v-list-group prepend-icon="account_circle" value="true">
                    <template v-slot:activator>
                        <v-list-tile>
                            <v-list-tile-title>Penerima Pendaftaran</v-list-tile-title>
                        </v-list-tile>
                    </template>
                    <v-list-tile @click="openDaftarkan_Siswa">
                        <v-list-tile-action></v-list-tile-action>
                        <v-list-tile-title>Daftarkan Siswa</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile @click="openGenerate_Token">
                        <v-list-tile-action></v-list-tile-action>
                        <v-list-tile-title>Generate Token</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile @click="openCetak_Kartu">
                        <v-list-tile-action></v-list-tile-action>
                        <v-list-tile-title>Cetak Kartu Pendaftaran</v-list-tile-title>
                    </v-list-tile>
                </v-list-group>
                <!-- Pengaturan Dashboard -->
                <v-list-tile @click="openPengaturan_Dashboard">
                    <v-list-tile-action>
                        <v-icon v-if="this.$root.current_url == '/job_management'" color="indigo">favorite</v-icon>
                        <v-icon v-else>favorite</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            Pengaturan Dashboard
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <!-- Pengaturan PPDB -->
                <v-list-group prepend-icon="account_circle" value="true">
                    <template v-slot:activator>
                        <v-list-tile>
                            <v-list-tile-title>Pengaturan PPDB</v-list-tile-title>
                        </v-list-tile>
                    </template>
                    <v-list-tile @click="openPeruntukan">
                        <v-list-tile-action></v-list-tile-action>
                        <v-list-tile-title>Peruntukan</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile @click="openKustom_Pertanyaan">
                        <v-list-tile-action></v-list-tile-action>
                        <v-list-tile-title>Kustom Pertanyaan</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile @click="openPembobotan_Kuota">
                        <v-list-tile-action></v-list-tile-action>
                        <v-list-tile-title>Kuota</v-list-tile-title>
                    </v-list-tile>
                    <v-list-group no-action sub-group>
                        <template v-slot:activator>
                            <v-list-tile>
                                <v-list-tile-title>Pembobotan</v-list-tile-title>
                            </v-list-tile>
                        </template>
                        <v-list-tile @click="openPembobotan_Zona">
                            <v-list-tile-title>Zona</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile @click="openPembobotan_Nilai">
                            <v-list-tile-title>Nilai</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile @click="openPembobotan_Akademik">
                            <v-list-tile-title>Akademik</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile @click="openPembobotan_NonAkademik">
                            <v-list-tile-title>Non Akademik</v-list-tile-title>
                        </v-list-tile>
                    </v-list-group>
                </v-list-group>
                <!-- Rekap Data -->
                <v-list-tile @click="openVerifikasi_Data">
                    <v-list-tile-action>
                        <v-icon v-if="this.$root.current_url == '/job_management'" color="indigo">favorite</v-icon>
                        <v-icon v-else>favorite</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            Verifikasi Data
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <!-- Analisis Data -->
                <v-list-group prepend-icon="account_circle" value="true">
                    <template v-slot:activator>
                        <v-list-tile>
                            <v-list-tile-title>Analisis Data</v-list-tile-title>
                        </v-list-tile>
                    </template>
                    <v-list-group no-action sub-group>
                        <template v-slot:activator>
                            <v-list-tile>
                                <v-list-tile-title>Zonasi</v-list-tile-title>
                            </v-list-tile>
                        </template>
                        <v-list-tile @click="openAnalisis_ZonasiFormulasi">
                            <v-list-tile-title>Formulasi</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile @click="openAnalisis_ZonasiApprovement">
                            <v-list-tile-title>Approvement</v-list-tile-title>
                        </v-list-tile>
                    </v-list-group>
                    <v-list-group no-action sub-group>
                        <template v-slot:activator>
                            <v-list-tile>
                                <v-list-tile-title>Non Zonasi</v-list-tile-title>
                            </v-list-tile>
                        </template>
                        <v-list-tile @click="openAnalisis_NonZonasiFormulasi">
                            <v-list-tile-title>Formulasi</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile @click="openAnalisis_NonZonasiApprovement">
                            <v-list-tile-title>Approvement</v-list-tile-title>
                        </v-list-tile>
                    </v-list-group>
                </v-list-group>
                <!-- Hasil Data -->
                <v-list-tile @click="openHasil_Data">
                    <v-list-tile-action>
                        <v-icon v-if="this.$root.current_url == '/job_management'" color="indigo">favorite</v-icon>
                        <v-icon v-else>favorite</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            Hasil Data
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>

        </v-navigation-drawer>

        <v-toolbar app fixed clipped-left dense>
            <v-toolbar-side-icon v-if="guest == 0 && role != 1" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>PPDB Lorem Ipsum</v-toolbar-title>
            <v-spacer></v-spacer>
            <div v-if="guest == 0">
                <v-btn flat @click="logout">Keluar</v-btn>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    <input type="hidden" name="_token" :value="token">
                </form>
            </div>
            <div v-else>
                <v-btn flat href="/login" style="text-decoration: none;">Login</v-btn>
                <v-btn flat href="/register" style="text-decoration: none;">Register</v-btn>
            </div>
        </v-toolbar>
    </div>
</template>
<script>
export default {
    data: () => ({
        drawer : true,
        menu: false,
    }),
    props: [
        'guest', 'role'
    ],
    computed: {
        token() {
            let token = document.head.querySelector('meta[name="csrf-token"]');
            return token.content
        }
    },
    methods: {
        logout() {
            document.getElementById('logout-form').submit()
        },
        openPengaturanPengguna(){
            window.location.href = "/";
        },
        laporan(){
            window.location.href = "/laporan";
        },
        job_management(){
            window.location.href = "/job_management";
        },
        openDaftarkan_Siswa(){
            window.location.href = "/admin/daftarkan_siswa";
        },
        openGenerate_Token(){
            window.location.href = "/admin/generate_token";
        },
        openCetak_Kartu(){
            window.location.href = "/admin/cetak_kartu";
        },
        openPengaturan_Dashboard(){
            window.location.href = "/admin/pengaturan_dashboard";
        },
        openPeruntukan(){
            window.location = "/admin/peruntukan";
        },
        openKustom_Pertanyaan(){
            window.location = "/admin/kustom_pertanyaan";
        },
        openPembobotan_Nilai(){
            window.location = "/admin/pembobotan/nilai";
        },
        openPembobotan_Zona(){
            window.location = "/admin/pembobotan/zona";
        },
        openPembobotan_Kuota(){
            window.location = "/admin/pembobotan/kuota";
        },
        openPembobotan_Akademik(){
            window.location = "/admin/pembobotan/akademik";
        },
        openPembobotan_NonAkademik(){
            window.location = "/admin/pembobotan/non_akademik";
        },
        openVerifikasi_Data(){
            window.location = "/admin/verifikasi_data";
        },
        openAnalisis_ZonasiFormulasi(){
            window.location = "/admin/analisis/zonasi/formulasi";
        },
        openAnalisis_ZonasiApprovement(){
            window.location = "/admin/analisis/zonasi/approvement";
        },
        openAnalisis_NonZonasiFormulasi(){
            window.location = "/admin/analisis/non_zonasi/formulasi";
        },
        openAnalisis_NonZonasiApprovement(){
            window.location = "/admin/analisis/non_zonasi/approvement";
        },
        openHasil_Data(){
            window.location = "/admin/hasil_data";
        }
    }
}
</script>