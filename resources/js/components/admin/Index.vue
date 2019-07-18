<template>
    <div>
        <v-layout justify-space-between align-center>
            <h4 class="font-weight-regular">Pengaturan Pengguna</h4>
            <v-btn color="green" class="mr-0" dark @click="tambahPengguna">Tambah Pengguna</v-btn>
        </v-layout>
        <v-card class="mt-4">
            <v-card-title>
                <v-spacer></v-spacer>
                <v-text-field append-icon="search" label="Search" single-line hide-details></v-text-field>
            </v-card-title>
            <v-data-table :headers="headers" :items="desserts" class="elevation-1">
                <template v-slot:items="props">
                    <td class="text-xs-left">{{ props.item.no_pengguna }}</td>
                    <td class="text-xs-left">{{ props.item.nama }}</td>
                    <td class="text-xs-left">{{ props.item.username }}</td>
                    <td class="text-xs-left">{{ props.item.jenis_kelamin }}</td>
                    <td class="text-xs-left">{{ props.item.tanggal_lahir }}</td>
                    <td class="text-xs-left">{{ props.item.handphone }}</td>
                    <td class="text-xs-left">{{ props.item.status }}</td>
                    <td class="text-xs-left">
                        <v-icon color="green">info</v-icon>
                    </td>
                </template>
            </v-data-table>
        </v-card>

        <template>
            <v-layout row justify-center>
                <v-dialog v-model="dialog" lazy fullscreen hide-overlay transition="dialog-bottom-transition">
                    <v-card>
                        <v-toolbar light>
                            <v-btn icon dark @click="dialog = false">
                                <v-icon light color="black">close</v-icon>
                            </v-btn>
                            <v-toolbar-title>Tambah Pengguna</v-toolbar-title>
                            <v-spacer></v-spacer>
                        </v-toolbar>
                        <v-list three-line subheader>
                            <v-subheader>Sales Control</v-subheader>
                            <v-layout class="ml-3" row wrap>
                                <v-form ref="form" lazy-validation>
                                    <v-text-field label="NIK" required></v-text-field>
                                    <v-text-field label="Nama" required></v-text-field>
                                    <v-text-field label="Alamat" required></v-text-field>
                                    <v-text-field label="E-mail" required></v-text-field>
                                    <v-text-field label="Status" placeholder="superadmin" required></v-text-field>
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
            headers: [
                { text: 'No. Pengguna', align: 'left', sortable: false, value: 'no_pengguna'},
                { text: 'Nama', value: 'nama' },
                { text: 'Username', value: 'username' },
                { text: 'Jenis Kelamin', value: 'jenis_kelamin' },
                { text: 'Tanggal Lahir', value: 'tanggal_lahir' },
                { text: 'Handphone', value: 'handphone' },
                { text: 'Status', value: 'status' },
                { text: 'Aksi', align: 'left', sortable: false}
            ],
            desserts: [
                { no_pengguna: 'Frozen Yogurt', nama: 159, username: 6.0, jenis_kelamin: 24, tanggal_lahir: 4.0, handphone: '1%', status: 'Admin' },
                { no_pengguna: 'Ice cream sandwich', nama: 237, username: 9.0, jenis_kelamin: 37, tanggal_lahir: 4.3, handphone: '1%', status: 'Admin' },
                { no_pengguna: 'Eclair', nama: 262, username: 16.0, jenis_kelamin: 23, tanggal_lahir: 6.0, handphone: '7%', status: 'Admin' },
                { no_pengguna: 'Cupcake', nama: 305, username: 3.7, jenis_kelamin: 67, tanggal_lahir: 4.3, handphone: '8%', status: 'Admin' },
                { no_pengguna: 'Gingerbread', nama: 356, username: 16.0, jenis_kelamin: 49, tanggal_lahir: 3.9, handphone: '16%', status: 'Admin' },
                { no_pengguna: 'Jelly bean', nama: 375, username: 0.0, jenis_kelamin: 94, tanggal_lahir: 0.0, handphone: '0%', status: 'Admin' },
                { no_pengguna: 'Lollipop', nama: 392, username: 0.2, jenis_kelamin: 98, tanggal_lahir: 0, handphone: '2%', status: 'Admin' },
                { no_pengguna: 'Honeycomb', nama: 408, username: 3.2, jenis_kelamin: 87, tanggal_lahir: 6.5, handphone: '45%', status: 'Admin' },
                { no_pengguna: 'Donut', nama: 452, username: 25.0, jenis_kelamin: 51, tanggal_lahir: 4.9, handphone: '22%', status: 'Admin' },
                { no_pengguna: 'KitKat', nama: 518, username: 26.0, jenis_kelamin: 65, tanggal_lahir: 7, handphone: '6%', status: 'Admin' }
            ],
        }
    },
    methods: {
        tambahPengguna(){
            this.dialog = true
        }
    },
}
</script>
