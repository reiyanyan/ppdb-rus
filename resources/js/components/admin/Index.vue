<template>
    <div>
        <v-layout justify-space-between align-center>
            <h4 class="font-weight-regular">Pengaturan Pengguna</h4>
            <v-btn color="green" class="mr-0" dark @click="openDialogAddUser">Tambah Pengguna</v-btn>
        </v-layout>
        <v-card class="mt-4">
            <v-card-title>
                <v-spacer></v-spacer>
                <v-text-field v-model="search" append-icon="search" label="Cari berdasarkan nama, email, handphone" single-line hide-details></v-text-field>
            </v-card-title>
            <v-data-table :headers="headers" :items="users" :loading="loading" :pagination.sync="pagination" :search="searchTrigger" hide-actions class="elevation-1">
                <template v-slot:items="props">
                    <td class="text-xs-left">{{ props.item.nip }}</td>
                    <td class="text-xs-left">{{ props.item.nama }}</td>
                    <td class="text-xs-left">{{ props.item.email }}</td>
                    <td class="text-xs-left">{{ props.item.handphone }}</td>
                    <td class="text-xs-left">{{ props.item.status }}</td>
                    <td class="text-xs-left">
                        <v-icon color="green" @click="openInfoDialog(props.item.id)">info</v-icon>
                    </td>
                </template>
            </v-data-table>
            <div class="text-xs-center pt-2">
                <v-pagination class="mb-2" v-if="!isSearch" v-model="pagination.current" :length="pagination.total" @input="onPageChange"></v-pagination>
            </div>
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
                            <v-toolbar-items>
                                <v-btn v-if="infoDialog" dark flat color="error" @click="deleteUser">Delete</v-btn>
                            </v-toolbar-items>
                        </v-toolbar>
                        <v-list three-line subheader>
                            <v-subheader>Sales Control</v-subheader>
                            <v-layout class="ml-3" row wrap>
                                <v-form ref="form" v-model="valid" lazy-validation>
                                    <v-text-field v-model="nip" :rules="nonNull" type="number" label="NIP" required></v-text-field>
                                    <v-text-field v-model="nama" :rules="nonNull" label="Nama" required></v-text-field>
                                    <v-text-field v-model="alamat" :rules="nonNull" label="Alamat" required></v-text-field>
                                    <v-text-field v-model="email" :rules="emailRules" label="E-mail" required></v-text-field>
                                    <v-select v-model="status" :rules="nonNull" :items="statusItems" label="Status" required></v-select>
                                    <v-text-field v-model="handphone" :mask="mask_phone" :rules="nonNull" label="No. Handphone" prefix="+62" required></v-text-field>
                                    <v-text-field v-if="!infoDialog" v-model="password" :append-icon="pw_visibility ? 'visibility' : 'visibility_off'" :rules="passwordRules" :type="pw_visibility ? 'text' : 'password'" label="Password" hint="At least 8 characters" @click:append="pw_visibility = !pw_visibility" required></v-text-field>
                                    <v-text-field v-if="!infoDialog" v-model="passwordConfirm" :append-icon="pwc_visibility ? 'visibility' : 'visibility_off'" :rules="passwordConfirmRules" :type="pwc_visibility ? 'text' : 'password'" label="Password Confirmation" @click:append="pwc_visibility = !pwc_visibility" required></v-text-field>
                                    <v-btn v-if="!infoDialog" :disabled="!valid" @click="validate" color="success">
                                        SAVE
                                    </v-btn>
                                    <v-btn v-else :disabled="!valid" @click="updateUser" color="success">
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
    mounted() {
        this.getAllUsers();
    },
    data() {
        return {
            dialog: false,
            infoDialog: false,
            nip: '',
            nama: '',
            alamat: '',
            email: '',
            status: '',
            handphone: '',
            password: '',
            passwordConfirm: '',
            search: '',
            isSearch: false,
            loading: true,
            valid: true,
            statusItems: ['SuperSuper Admin', 'Super Admin', 'Admin', 'Operator'],
            mask_phone: '###-###-###-###',
            pw_visibility: false,
            pwc_visibility: false,
            pagination: {
                rowsPerPage: 20,
                current: 1,
                total: 0
            },
            passwordRules: [
                v => !!v || 'Password is required',
                v => (v && v.length >= 8) || 'Min 8 characters'
            ],
            passwordConfirmRules: [
                v => !!v || 'Password Confirmation is Required',
                v => v == this.password || "Password doesn't match"
            ],
            nameRules: [
                v => !!v || 'Name is required',
                v => (v && v.length <= 10) || 'Name must be less than 10 characters'
            ],
            nonNull: [
                v => !!v || 'Field is Required'
            ],
            emailRules: [
                v => !!v || 'E-mail is required',
                v => /.+@.+/.test(v) || 'E-mail must be valid'
            ],
            headers: [
                { text: 'No. Pengguna', align: 'left', value: 'nip', sortable: false },
                { text: 'Nama', value: 'nama' },
                { text: 'Email', value: 'email' },
                { text: 'Handphone', value: 'handphone' },
                { text: 'Status', value: 'status' },
                { text: 'Aksi', align: 'left', sortable: false}
            ],
            users: [],
        }
    },
    computed: {
        searchTrigger(){
            if(this.search == ''){
                this.loading = true;
                this.isSearch = false;
                this.getAllUsers();
            } else {
                this.isSearch = true;
                this.loading = true;
                this.filteredUsers();
            }
        },
    },
    methods: {
        openDialogAddUser(){
            this.dialog = true
        },
        getAllUsers(){
            axios.get("admin/user_management/getAll?page=" + this.pagination.current).then((response) => {
                this.loading = false;
                this.users = response.data.data;
                this.pagination.current = response.data.current_page;
                this.pagination.total = response.data.last_page;
            }, (error) => {
                console.log(error);
            });
        },
        onPageChange(){
            this.getAllUsers();
        },
        filteredUsers(){
            axios.post('admin/user_management/search', {
                _token : window.CSRF_TOKEN,
                search : this.search,
            }).then((response) => {
                this.loading = false;
                return this.users = response.data.data;
            });
        },
        validate(){
            if (this.$refs.form.validate()) {
                axios.post('admin/user_management/tambah', {
                    _token : window.CSRF_TOKEN,
                    name : this.nama,
                    email : this.email,
                    nip : this.nip,
                    role : this.statusItems.indexOf(this.status) + 2,
                    handphone : '0' + this.handphone,
                    alamat : this.alamat,
                    password : this.passwordConfirm 
                }).then((response) => {
                    if(response.data.success == true){
                        Swal.fire('Sukses', 'Sukses Menambahkan Pengguna', 'success').then((result) => {
                            if(result.value) window.location.reload();
                        });
                    }
                });
            }
        },
        updateUser(){
            axios.post('admin/user_management/update', {
                _token : window.CSRF_TOKEN,
                id : this.id,
                name : this.nama,
                email : this.email,
                nip : this.nip,
                role : this.statusItems.indexOf(this.status) + 2,
                handphone : '0' + this.handphone,
                alamat : this.alamat,
            }).then((response) => {
                if(response.data.success == true){
                    Swal.fire('Sukses', 'Sukses Memperbarui Pengguna', 'success').then((result) => {
                        if(result.value) window.location.reload();
                    });
                }
            });
        },
        openInfoDialog(id){
            this.infoDialog = true;
            this.dialog = true;
            this.id = id;
            axios.post('admin/user_management/info', {
                _token : window.CSRF_TOKEN,
                id
            }).then((response) => {
                if(response.data.success == true){
                    this.nama = response.data.data.name;
                    this.email = response.data.data.email;
                    this.nip = response.data.data.nip;
                    this.status = response.data.data.status;
                    this.handphone = response.data.data.handphone.substr(1);
                    this.alamat = response.data.data.alamat;
                }
            });
        },
        deleteUser(){


            Swal.fire({
                title: 'Anda Yakin ?',
                text: "Anda tidak dapat mengembalikan ini",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya!'
            }).then((result) => {
                if (result.value) {
                    axios.post('admin/user_management/delete', {
                        _token : window.CSRF_TOKEN,
                        id : this.id
                    }).then((response) => {
                        if(response.data.success == true){
                            Swal.fire('Sukses', 'Sukses Menghapus Pengguna', 'success').then((result) => {
                                if(result.value) window.location.reload();
                            });
                        }
                    }, (error) => {
                        console.log(error);
                    });
                }
            })
        } 
    },
}
</script>
