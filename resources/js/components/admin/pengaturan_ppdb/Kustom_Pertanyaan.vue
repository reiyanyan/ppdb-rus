<template>
    <div>
        <h4 class="font-weight-regular">Kustom Pertanyaan</h4>
        <v-card style="border-radius: 7px" class="elevation-5">
            <v-list subheader>
                <v-subheader>
                    Pertanyaan Pra Pendaftaran
                </v-subheader>
                <v-list-tile v-for="item in items" :key="item.title" @click="">

                    <v-list-tile-content>
                        <v-list-tile-title v-html="item.title"></v-list-tile-title>
                    </v-list-tile-content>

                    <v-list-tile-action>
                        <v-switch v-model="switch1"></v-switch>
                    </v-list-tile-action>
                </v-list-tile>
                <div class="mx-5 my-3">
                    <v-btn block round color="green" dark @click="showDialogCustomPertanyaan">Tambah Kustom</v-btn>
                </div>
            </v-list>
        </v-card>

        <v-card class="mt-4 pb-0 elevation-5" style="border-radius: 7px">
            <v-list subheader>
                <v-subheader>
                    Pertanyaan Paska Pendaftaran
                </v-subheader>
                <v-list-group v-for="item in items3" :key="item.title" v-model="item.active" no-action>
                    <template v-slot:activator>
                        <v-list-tile>
                            <v-list-tile-content>
                                <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </template>
                    <v-list-tile v-for="subItem in item.items" :key="subItem.title" @click="">
                        <v-list-tile-content>
                            <v-list-tile-title>{{ subItem.title }}</v-list-tile-title>
                        </v-list-tile-content>
                        <v-list-tile-action>
                            <v-switch v-model="switch1"></v-switch>
                        </v-list-tile-action>
                    </v-list-tile>
                    <div class="mx-5 my-3">
                        <v-btn block round color="green" dark @click="showDialogCustomPertanyaan">Tambah Kustom</v-btn>
                    </div>
                </v-list-group>
            </v-list>
        </v-card>

        <template>
            <v-layout row justify-center>
                <v-dialog v-model="dialogCustomPertanyaan" persistent max-width="700px">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Tambah Pertanyaan</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12>
                                        <v-text-field label="Pertanyaan*" required></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <!-- <v-layout align-center>
                                            <h4 class="font-weight-light" color="black">Upload File</h4>
                                            <v-switch v-model="switch1"></v-switch>
                                        </v-layout> -->
                                        <v-layout justify-space-between align-center>
                                            <h4 class="font-weight-light" color="black">Upload File</h4>
                                            <div>
                                                <v-switch v-model="switch1"></v-switch>
                                            </div>
                                        </v-layout>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" flat @click="dialogCustomPertanyaan = false">Close</v-btn>
                            <v-btn color="blue darken-1" flat @click="dialogCustomPertanyaan = false">Save</v-btn>
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
            switch1 : true,
            panel: [false],
            dialogCustomPertanyaan: false,
            switch1: true,
            items: [
                { title: 'No Pendaftaran' },
                { title: 'Nama Calon Siswa' },
                { title: 'Tempat Lahir' },
                { title: 'Tanggal Lahir' },
                { title: 'Tempat Tinggal' },
                { title: 'Tempat Tinggal Sesuai KK' },
                { title: 'Tanggal KK Diterbitkan' },
                { title: 'Upload KK' },
                { title: 'Asal Sekolah' },
                { title: 'Nomor Ijazah' },
                { title: 'Upload Kelulusan' },

            ],
            items2: [
                { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg' }
            ],
            items3: [
                { title: 'Identitas Pribadi', active: true,
                    items: [
                        { title: 'Nama' },
                        { title: 'NISN' },
                        { title: 'Jenis Kelamin' },
                        { title: 'Tempat Lahir' },
                        { title: 'Tanggal Lahir' },
                        { title: 'Asal Sekolah' },
                        { title: 'Agama' },
                        { title: 'Nomor Handphone' }
                    ]
                },
                { title: 'Data Pribadi',
                    items: [
                        { title: 'Nomor Induk Kependudukan' },
                        { title: 'Alamat KTP' },
                        { title: 'Domisili' },
                        { title: 'Transport ke Sekolah' },
                        { title: 'Kartu PIP/KPS' }
                    ]
                },
                { title: 'Data Orang Tua',
                    items: [
                        { title: 'Nama Ayah' },
                        { title: 'Agama Ayah' },
                        { title: 'Alamat KTP Ayah' },
                        { title: 'Domisili Ayah' },
                        { title: 'No Handphone Ayah' },
                        { title: 'Tempat Lahir Ayah' },
                        { title: 'Tanggal Lahir Ayah' },
                        { title: 'Penghasilan Ayah' },
                        { title: 'Nama Ibu' },
                        { title: 'Agama Ibu' },
                        { title: 'Alamat KTP Ibu' },
                        { title: 'Domisili Ibu' },
                        { title: 'No Handphone Ibu' },
                        { title: 'Tempat Lahir Ibu' },
                        { title: 'Tanggal Lahir Ibu' },
                        { title: 'Penghasilan Ibu' },
                        { title: 'Nama Wali' },
                        { title: 'Agama Wali' },
                        { title: 'Alamat KTP Wali' },
                        { title: 'Domisili Wali' },
                        { title: 'No Handphone Wali' },
                        { title: 'Tempat Lahir Wali' },
                        { title: 'Tanggal Lahir Wali' },
                        { title: 'Penghasilan Wali' },
                    ]
                },
                { title: 'Nilai',
                    items: [
                        { title: 'Ujian Nasional' },
                        { title: 'Raport' },
                        { title: 'Nilai Kejuaraan' },
                    ]
                },
            ]
        }
    },
    methods: {
        showDialogCustomPertanyaan(){
            this.dialogCustomPertanyaan = true;
        }
    },
}
</script>
