<template>
    <div>
        <h1 class="text-xs-center justify-center mt-5 mb-3">PPDB SMA CONTOH</h1>
        <v-layout row fill-height justify-center align-center>
            <v-card width="600px" style="border-radius: 7px;">
                <v-card-title>
                    <v-flex xs12 class="mx-3">
                        <v-text-field v-model="nomor_pendaftaran" label="Nomor Pendaftaran"></v-text-field>
                        <v-text-field v-model="email" label="Email"></v-text-field>
                        <v-text-field v-model="handphone" label="Handphone"></v-text-field>
                    </v-flex>
                </v-card-title>
                <v-card-actions>
                    <v-btn round color="teal" class="mx-3 mt-3 mb-3" @click="sendEmail" block dark>Masuk</v-btn>
                </v-card-actions>
            </v-card>
        </v-layout>
    </div>
</template>
<script>
export default {
    data() {
        return {
            nomor_pendaftaran: '',
            email: '',
            handphone: '',
        }
    },
    methods: {
        sendEmail(){
            Swal.fire({
                type: 'success',
                title: 'Berhasil!',
                text: 'Cek Email kamu untuk melanjutkan pendaftaran ya!',
                footer: "<a href='http://" + this.email.replace(/.*@/, "") +"'>Cek Email</a>"
            }).then((result) => {
                if(result.value){
                    window.location = '/activation'
                }
            })
        }
    },
}
</script>
