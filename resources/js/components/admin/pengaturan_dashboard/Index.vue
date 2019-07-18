<template>
    <div>
        <h4 class="font-weight-regular">Pengaturan Dashboard</h4>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <v-form class="px-4" ref="form" lazy-validation style="width: 100%">
                    <v-layout align-center justify-center>
                        <v-avatar :tile="false" size="120px" color="grey lighten-4">
                            <img src="https://waktuluangayunovia.files.wordpress.com/2018/03/e6cff32ae8a9116badcf347642010941.jpg?w=1400&h=9999" alt="avatar">
                        </v-avatar>
                    </v-layout>
                    <v-layout row wrap>
                        <v-flex xs12>
                            <v-text-field label="Nama Institusi" required></v-text-field>
                        </v-flex>
                        <v-flex xs6>
                            <h5 class="font-weight-regular mb-0 pb-0">Jadwal Pendaftaran</h5>
                            <v-text-field class="mr-3" label="Nama Institusi" required></v-text-field>
                        </v-flex>
                        <v-flex xs6>
                            <h5 class="font-weight-regular mb-0 pb-0">&nbsp;</h5>
                            <v-text-field class="ml-3" label="Nomor Pendaftaran" required></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field label="Token" required></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field label="Alur Pendaftaran" required readonly @click="openAlurPendaftaran"></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field label="Persyaratan Pendaftaran" required></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field label="Kuota yang diterima" required></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field label="Tahapan Pelaksanaan" required></v-text-field>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field label="Pengumuman" required></v-text-field>
                        </v-flex>
                    </v-layout>
                    <v-btn block round dark class="mt-3" color="success">
                        Cetak Nomor Pendaftaran
                    </v-btn>
                </v-form>
            </v-card-title>
        </v-card>

        <template>
            <v-layout row justify-center>
                <v-dialog v-model="dialogAlurPendaftaran" persistent max-width="700px">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Alur Pendaftaran</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light" color="black">Pendaftaran</h4>
                                        <v-menu ref="menu" v-model="menu" :close-on-content-click="false" :nudge-right="40" lazy transition="scale-transition" offset-y full-width min-width="290px">
                                            <template v-slot:activator="{ on }">
                                                <v-text-field v-model="date" label="Mulai" readonly v-on="on"></v-text-field>
                                            </template>
                                            <v-date-picker v-model="date" @change="save"></v-date-picker>
                                        </v-menu>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light">&nbsp;</h4>
                                        <v-text-field label="Akhir" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light" color="black">Rekap Data</h4>
                                        <v-text-field label="Mulai*" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light">&nbsp;</h4>
                                        <v-text-field label="Akhir" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light" color="black">Analisis Data</h4>
                                        <v-text-field label="Mulai*" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light">&nbsp;</h4>
                                        <v-text-field label="Akhir" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light" color="black">Hasil Pengumuman</h4>
                                        <v-text-field label="Mulai*" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <h4 class="font-weight-light">&nbsp;</h4>
                                        <v-text-field label="Akhir" required></v-text-field>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" flat @click="dialogAlurPendaftaran = false">Close</v-btn>
                            <v-btn color="blue darken-1" flat @click="dialogAlurPendaftaran = false">Save</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-layout>
        </template>
    </div>
</template>
<script>
export default {
    data() {
        return {
            dialogAlurPendaftaran : false,
            date: new Date().toISOString().substr(0, 10),
            menu: false,
        }
    },
    methods: {
        openAlurPendaftaran(){
            this.dialogAlurPendaftaran = true
        },
        save(date){
            this.$refs.menu.save(date)
        }
    },
}
</script>