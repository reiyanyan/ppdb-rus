<template>
    <div>
        <h4 class="font-weight-regular">Verifikasi Data</h4>
        <v-data-table :headers="headersZonasi" :items="itemsZonasi" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
            <template v-slot:items="props">
                <td class="text-xs-left">{{ props.item.no_pendidikan }}</td>
                <td class="text-xs-left">{{ props.item.nama }}</td>
                <td class="text-xs-left">{{ props.item.tanggal_lahir }}</td>
                <td class="text-xs-left">{{ props.item.asal_sekolah }}</td>
                <td class="text-xs-left">{{ props.item.kode_wilayah }}</td>
                <td class="text-xs-left">{{ props.item.status }}</td>
                <td class="text-xs-left">
                    <v-icon @click="openDialogInfo">info</v-icon>
                </td>
            </template>
        </v-data-table>

        <template>
            <v-layout row justify-center>
                <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
                    <v-card>
                        <v-toolbar light>
                            <v-btn icon dark @click="dialog = false">
                                <v-icon light color="black">close</v-icon>
                            </v-btn>
                            <v-toolbar-title>Info</v-toolbar-title>
                            <v-spacer></v-spacer>
                        </v-toolbar>
                        <v-list three-line subheader>
                            <v-subheader>Info</v-subheader>
                            <v-layout class="ml-3" row wrap>
                                <v-form ref="form" lazy-validation>
                                    <v-text-field label="Identitas" required></v-text-field>
                                    <v-text-field label="Nama" required></v-text-field>
                                    <v-text-field label="Alamat" required></v-text-field>
                                    <v-text-field label="E-mail" required></v-text-field>
                                    <v-text-field label="No. Handphone" prefix="+62" required></v-text-field>
                                    <v-text-field :append-icon="pw_visibility ? 'visibility' : 'visibility_off'" :type="pw_visibility ? 'text' : 'password'" label="Password" hint="At least 8 characters" @click:append="pw_visibility = !pw_visibility" required></v-text-field>
                                    <v-text-field :append-icon="pwc_visibility ? 'visibility' : 'visibility_off'" :type="pwc_visibility ? 'text' : 'password'" label="Password Confirmation" @click:append="pwc_visibility = !pwc_visibility" required></v-text-field>
                                    <v-btn color="success">
                                        SAVE
                                    </v-btn>
                                </v-form>
                            </v-layout>
                        </v-list>
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
            dialog: false,
            pw_visibility: false,
            pwc_visibility: false,
            pagination: {
                page: 1,
                rowsPerPage: 10,
                totalItems: 0
            },
            headersZonasi: [
                { text: 'No Pendidikan', value: 'no_pendidikan', align: 'left', sortable: false},
                { text: 'Nama', value: 'nama',  sortable: false },
                { text: 'Tanggal Lahir', value: 'tanggal_lahir', sortable: false },
                { text: 'Asal Sekolah', value: 'asal_sekolah', sortable: false },
                { text: 'Kode Wilayah', value: 'kode_wilayah', sortable: false },
                { text: 'Status', value: 'status', sortable: false },
                { text: 'Aksi', sortable: false },
            ],
            itemsZonasi: [
                { no_pendidikan: '2394892304123', nama: 'Lorem Ipsum', tanggal_lahir: '12 Juli 2019', asal_sekolah: 'SMA Schoolmedia', kode_wilayah: '11.110.1110.11110', status: 'OK' },
                { no_pendidikan: '2394892304123', nama: 'Lorem Ipsum', tanggal_lahir: '12 Juli 2019', asal_sekolah: 'SMA Schoolmedia', kode_wilayah: '11.110.1110.11110', status: 'OK' },
                { no_pendidikan: '2394892304123', nama: 'Lorem Ipsum', tanggal_lahir: '12 Juli 2019', asal_sekolah: 'SMA Schoolmedia', kode_wilayah: '11.110.1110.11110', status: 'OK' },
            ]
        }
    },
    methods: {
        openDialogInfo(){
            this.dialog = true;
        }
    },
}
</script>
