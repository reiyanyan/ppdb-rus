<template>
    <div>
        <h1 class="text-xs-center justify-center mt-5 mb-3">PPDB SMA CONTOH</h1>
        <v-layout row fill-height justify-center align-center>
            <v-card width="600px" style="border-radius: 7px;">
                <!-- <v-container fill-height fluid>
                    <v-layout fill-height>
                        <v-flex xs12 align-end flexbox>
                            <span class="headline">Top 10 Australian beaches</span>
                        </v-flex>
                    </v-layout>
                </v-container> -->
                <v-card-title>
                    <v-flex xs12 class="mx-3">
                        <v-text-field label="Nomor Pendaftaran"></v-text-field>
                        <v-text-field label="Token"></v-text-field>
                    </v-flex>
                </v-card-title>
                <v-card-actions>
                    <v-btn round color="teal" class="mx-3 mt-3 mb-3" href="/activate" block dark>Masuk</v-btn>
                </v-card-actions>
            </v-card>
        </v-layout>
    </div>
</template>
