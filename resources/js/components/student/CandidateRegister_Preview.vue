<template>
    <div>
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
        <h1 class="text-xs-center mt-4" style="font-family: 'Fredoka One', cursive;">TINJAU DATA</h1>
        <v-stepper v-model="moveTo" class="mt-4">
            <v-stepper-header>
                <v-stepper-step step="1" :complete="moveTo > 1">Identitas Pribadi</v-stepper-step>
                <v-divider></v-divider>
                <v-stepper-step step="2" :complete="moveTo > 2">Data Pribadi</v-stepper-step>
                <v-divider></v-divider>
                <v-stepper-step step="3" :complete="moveTo > 3">Identitas Orang Tua</v-stepper-step>
                <v-divider></v-divider>
                <v-stepper-step step="4" :complete="moveTo > 4">Nilai Raport</v-stepper-step>
            </v-stepper-header>
            <v-stepper-items class="py-4">
                <v-container elevation-10>
                    <v-stepper-content class="mt-0 pt-0" step="1">
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Nama Lengkap</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Nama Lengkap"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">NISN</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="NISN"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Jenis Kelamin</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Jenis Kelamin"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Tempat Lahir</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Tempat Lahir"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Tanggal Lahir</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Tanggal Lahir"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Asal Sekolah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Provinsi"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs6></v-flex>
                            <v-flex xs6>
                                <v-text-field label="Kabupaten"></v-text-field>
                                <v-text-field label="Kecamatan"></v-text-field>
                                <v-text-field label="Kelurahan"></v-text-field>
                                <v-text-field label="NPSN"></v-text-field>
                                <v-text-field label="Nama Sekolahan"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Agama</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Agama"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Nomor Handphone</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Nomor Handphone"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Email</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Email"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Anak ke</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Anak ke"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Berat Badan</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Berat Badan"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Tinggi Badan</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Tinggi Badan"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Golongan darah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Golongan darah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Status Dalam Keluarga</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Status Dalam Keluarga"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Nomor Akta Kelahiran</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Nomor Akta Kelahiran"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Foto Siswa</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Foto Siswa" prepend-inner-icon="attach_file"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Foto Akta Kelahiran</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Foto Akta Kelahiran" prepend-inner-icon="attach_file"></v-text-field>
                            </v-flex>
                        </v-layout>
                    </v-stepper-content>
                    <v-stepper-content step="2">
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Alamat KTP</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Provinsi"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs6></v-flex>
                            <v-flex xs6>
                                <v-text-field label="Kabupaten"></v-text-field>
                                <v-text-field label="Kecamatan"></v-text-field>
                                <v-text-field label="Kelurahan"></v-text-field>
                                <v-text-field label="RT"></v-text-field>
                                <v-text-field label="RW"></v-text-field>
                                <v-text-field label="Kode Pos"></v-text-field>
                                <v-text-field label="Alamat"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Domisili</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-checkbox v-model="checkbox" label="Sesuai Dengan KTP"></v-checkbox>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs6></v-flex>
                            <v-flex xs6>
                                <v-text-field label="Provinsi"></v-text-field>
                                <v-text-field label="Kabupaten"></v-text-field>
                                <v-text-field label="Kecamatan"></v-text-field>
                                <v-text-field label="Kelurahan"></v-text-field>
                                <v-text-field label="RT"></v-text-field>
                                <v-text-field label="RW"></v-text-field>
                                <v-text-field label="Kode Pos"></v-text-field>
                                <v-text-field label="Alamat"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Transport ke Sekolah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Transport ke Sekolah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Kartu PIP atau KPS</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Kartu Pip atau KPS"></v-text-field>
                            </v-flex>
                        </v-layout>
                    </v-stepper-content>
                    <v-stepper-content step="3">
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Nama Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Nama Ayah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Agama Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Agama Ayah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Alamat KTP Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Provinsi"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs6></v-flex>
                            <v-flex xs6>
                                <v-text-field label="Kabupaten"></v-text-field>
                                <v-text-field label="Kecamatan"></v-text-field>
                                <v-text-field label="Kelurahan"></v-text-field>
                                <v-text-field label="RT"></v-text-field>
                                <v-text-field label="RW"></v-text-field>
                                <v-text-field label="Kode Pos"></v-text-field>
                                <v-text-field label="Alamat"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Domisili Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-checkbox v-model="checkbox" label="Sesuai Dengan KTP"></v-checkbox>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs6></v-flex>
                            <v-flex xs6>
                                <v-text-field label="Provinsi"></v-text-field>
                                <v-text-field label="Kabupaten"></v-text-field>
                                <v-text-field label="Kecamatan"></v-text-field>
                                <v-text-field label="Kelurahan"></v-text-field>
                                <v-text-field label="RT"></v-text-field>
                                <v-text-field label="RW"></v-text-field>
                                <v-text-field label="Kode Pos"></v-text-field>
                                <v-text-field label="Alamat"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Nomor Handphone Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Nomor Handphone Ayah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Tempat Lahir Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Tempat Lahir Ayah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Tanggal Lahir Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Tanggal Lahir Ayah"></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout align-center>
                            <v-flex xs6>
                                <h4 class="font-weight-light">Pengashilan Ayah</h4>
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field label="Pengashilan Ayah"></v-text-field>
                            </v-flex>
                        </v-layout>
                    </v-stepper-content>
                    <v-stepper-content step="4">
                        <h4 class="font-weight-light">Nilai</h4>
                    </v-stepper-content>
                </v-container>
            </v-stepper-items>
            <v-container class="pr-0">
                <div class="text-xs-right">
                    <v-btn color="grey" flat v-show="moveTo > 1"  @click="goBack">Kembali</v-btn>
                    <v-btn color="primary" @click="goNext">Selanjutnya</v-btn>
                </div>
            </v-container>
        </v-stepper>
    </div>

</template>
<script>
export default {
    data() {
        return {
            moveTo: 0,
            identitas_pribadi: true,
            checkbox: false,
        }
    },
    methods: {
        goBack(){
            this.moveTo--;
        }, 
        goNext(){
            if(this.moveTo > 3) window.location='/siswa/dashboard'
            else this.moveTo++
        }
    },
}
</script>