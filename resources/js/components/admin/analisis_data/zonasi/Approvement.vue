<template>
    <div>
        <h4 class="font-weight-regular">Formulasi Data</h4>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <v-layout justify-space-between align-center>
                    <h4 class="font-weight-regular">Pengaturan Pengguna</h4>
                    <v-switch v-model="switch1"></v-switch>
                </v-layout>
            </v-card-title>
        </v-card>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Zona</h4>
                    <v-data-table :headers="headersZona" :items="itemsZona" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.item.nama }}</td>
                            <td class="text-xs-left">{{ props.item.no_pendaftaran }}</td>
                            <td class="text-xs-left">{{ props.item.kode_wilayah }}</td>
                            <td class="text-xs-left">{{ props.item.jarak }}</td>
                            <td class="text-xs-left">{{ props.item.point }}</td>
                            <td class="text-xs-left">{{ props.item.umur }}</td>
                            <td class="text-xs-left">{{ props.item.tanggal_pendaftaran }}</td>
                            <td class="text-xs-left">{{ props.item.nilai }}</td>
                            <td class="text-xs-left">{{ props.item.rangking }}</td>
                            <td class="text-xs-left">
                                <v-btn small color="success">Terima</v-btn>
                            </td>
                        </template>
                    </v-data-table>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Nilai</h4>
                    <v-data-table :headers="headersNilai" :items="itemsNilai" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.item.nama }}</td>
                            <td class="text-xs-left">{{ props.item.no_pendaftaran }}</td>
                            <td class="text-xs-left">{{ props.item.nilai_un }}</td>
                            <td class="text-xs-left">{{ props.item.nilai_raport }}</td>
                            <td class="text-xs-left">{{ props.item.akademik }}</td>
                            <td class="text-xs-left">{{ props.item.non_akademik }}</td>
                            <td class="text-xs-left">{{ props.item.nilai_test }}</td>
                            <td class="text-xs-left">{{ props.item.rangking }}</td>
                            <td class="text-xs-left">
                                <v-btn small color="success">Terima</v-btn>
                            </td>
                        </template>
                    </v-data-table>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Pindah Orang Tua</h4>
                    <v-data-table :headers="headersPindahOrtu" :items="itemsPindahOrtu" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.item.nama }}</td>
                            <td class="text-xs-left">{{ props.item.no_pendaftaran }}</td>
                            <td class="text-xs-left">{{ props.item.kode_wilayah }}</td>
                            <td class="text-xs-left">{{ props.item.jarak }}</td>
                            <td class="text-xs-left">{{ props.item.point }}</td>
                            <td class="text-xs-left">{{ props.item.umur }}</td>
                            <td class="text-xs-left">{{ props.item.tanggal_pendaftaran }}</td>
                            <td class="text-xs-left">{{ props.item.nilai }}</td>
                            <td class="text-xs-left">{{ props.item.rangking }}</td>
                            <td class="text-xs-left">
                                <v-btn small color="success">Terima</v-btn>
                            </td>
                        </template>
                    </v-data-table>
                </div>
            </v-card-title>
        </v-card>
    </div>
</template>
<script>
export default {
    data() {
        return {
            switch1: false,
            headersZona: [
                { text: 'Nama', align: 'left', sortable: false, value: 'nama'},
                { text: 'No Pendaftaran', value: 'no_pendaftaran' },
                { text: 'Kode Wilayah', value: 'kode_wilayah' },
                { text: 'Jarak', value: 'jarak' },
                { text: 'Point', value: 'point' },
                { text: 'Umur', value: 'umur' },
                { text: 'Tanggal Pendaftaran', value: 'tanggal_pendaftaran' },
                { text: 'Nilai', align: 'left', value: 'nilai', sortable: false},
                { text: 'Rangking', align: 'left', value: 'rangking', sortable: false},
                { text: 'Approvement', align: 'left', sortable: false},
            ],
            itemsZona: [
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
            ],
            headersNilai: [
                { text: 'Nama', align: 'left', sortable: false, value: 'nama'},
                { text: 'No Pendaftaran', value: 'no_pendaftaran' },
                { text: 'Nilai UN', value: 'nilai_un' },
                { text: 'Nilai Raport', value: 'nilai_raport' },
                { text: 'Akademik', value: 'akademik' },
                { text: 'Non Akademik', value: 'non_akademik' },
                { text: 'Nilai Test', value: 'nilai_test' },
                { text: 'Rangking', align: 'left', value: 'rangking', sortable: false},
                { text: 'Approvement', align: 'left', sortable: false},
            ],
            itemsNilai: [
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, nilai_un: 6.0, nilai_raport: 24, akademik: 4.0, non_akademik: '14', nilai_test: '12 Juli 2019', rangking: 1 },
            ],
            headersPindahOrtu: [
                { text: 'Nama', align: 'left', sortable: false, value: 'nama'},
                { text: 'No Pendaftaran', value: 'no_pendaftaran' },
                { text: 'Kode Wilayah', value: 'kode_wilayah' },
                { text: 'Jarak', value: 'jarak' },
                { text: 'Point', value: 'point' },
                { text: 'Umur', value: 'umur' },
                { text: 'Tanggal Pendaftaran', value: 'tanggal_pendaftaran' },
                { text: 'Nilai', align: 'left', value: 'nilai', sortable: false},
                { text: 'Rangking', align: 'left', value: 'rangking', sortable: false},
                { text: 'Approvement', align: 'left', sortable: false},
            ],
            itemsPindahOrtu: [
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
                { nama: 'Frozen Yogurt', no_pendaftaran: 159, kode_wilayah: 6.0, jarak: 24, point: 4.0, umur: '14', tanggal_pendaftaran: '12 Juli 2019', nilai: 98, rangking: 1 },
            ],
        }
    },
}
</script>
