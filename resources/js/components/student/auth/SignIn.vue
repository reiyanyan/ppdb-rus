<template>
    <div>
        <h1 class="text-xs-center justify-center mt-5 mb-3">PPDB SMA CONTOH</h1>
        <v-layout row fill-height justify-center align-center>
            <v-card width="600px" style="border-radius: 7px;">
                <v-card-title>
                    <v-flex xs12 class="mx-3">
                        <v-text-field label="Username"></v-text-field>
                        <v-text-field label="Password" :append-icon="showPassword ? 'visibility' : 'visibility_off'" :type="showPassword ? 'text' : 'password'" @click:append="showPassword = !showPassword"></v-text-field>
                    </v-flex>
                </v-card-title>
                <v-card-actions>
                    <v-btn round color="teal" class="mx-3 mt-3 mb-3" href="/siswa/daftar" block dark>Masuk</v-btn>
                </v-card-actions>
            </v-card>
        </v-layout>
    </div>
</template>
<script>
export default {
    data() {
        return {
            showPassword: false
        }
    },
}
</script>