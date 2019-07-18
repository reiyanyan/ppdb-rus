<template>
    <div>
        <h4 class="font-weight-regular">Cetak Kartu Pendaftaran</h4>
        <v-btn block round color="blue" dark>Cetak Kartu Pendaftaran</v-btn>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <v-form class="px-4" ref="form" lazy-validation style="width: 100%">
                    <v-text-field label="Nama Calon Siswa" required></v-text-field>
                    <v-text-field label="Nomor Pendaftaran" required></v-text-field>
                    <v-text-field label="Token" required></v-text-field>
                    <v-btn block round dark class="mt-3" color="success">
                        Cetak Nomor Pendaftaran
                    </v-btn>
                </v-form>
            </v-card-title>
        </v-card>
    </div>
</template>
<script>
export default {
    data() {
        return {
            email : ''
        }
    },
}
</script>
