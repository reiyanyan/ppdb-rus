<template>
    <div>
        <h4 class="font-weight-regular">Pembobotan Zona</h4>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Wilayah</h4>
                    <v-data-table :headers="headersWilayah" :items="itemsWilayah" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.index + 1}}</td>
                            <td class="text-xs-left">{{ props.item.kd_prov }}</td>
                            <td class="text-xs-left">{{ props.item.provinsi }}</td>
                            <td class="text-xs-left">{{ props.item.kode_prov }}</td>
                            <td class="text-xs-left">{{ props.item.kabupaten }}</td>
                            <td class="text-xs-left">{{ props.item.kode_kab }}</td>
                            <td class="text-xs-left">{{ props.item.kecamatan }}</td>
                            <td class="text-xs-left">{{ props.item.kode_kec }}</td>
                            <td class="text-xs-left">{{ props.item.kode_wilayah }}</td>
                            <td class="text-xs-left">{{ props.item.desa }}</td>
                            <td class="text-xs-left">{{ props.item.zone }}</td>
                            <td class="text-xs-left">{{ props.item.bobot }}</td>
                        </template>
                    </v-data-table>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Zoning</h4>
                    <v-data-table :headers="headersWilayah" :items="itemsWilayah" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.index + 1}}</td>
                            <td class="text-xs-left">{{ props.item.kd_prov }}</td>
                            <td class="text-xs-left">{{ props.item.provinsi }}</td>
                            <td class="text-xs-left">{{ props.item.kode_prov }}</td>
                            <td class="text-xs-left">{{ props.item.kabupaten }}</td>
                            <td class="text-xs-left">{{ props.item.kode_kab }}</td>
                            <td class="text-xs-left">{{ props.item.kecamatan }}</td>
                            <td class="text-xs-left">{{ props.item.kode_kec }}</td>
                            <td class="text-xs-left">{{ props.item.kode_wilayah }}</td>
                            <td class="text-xs-left">{{ props.item.desa }}</td>
                            <td class="text-xs-left">{{ props.item.zone }}</td>
                            <td class="text-xs-left">{{ props.item.bobot }}</td>
                        </template>
                    </v-data-table>
                </div>
            </v-card-title>
        </v-card>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Umur Kartu Keluarga</h4>
                    <v-data-table :headers="headersKartuKeluarga" :items="itemsKartuKeluarga" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.index + 1}}</td>
                            <td class="text-xs-left">{{ props.item.umur }}</td>
                            <td class="text-xs-left">{{ props.item.bobot }}</td>
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
            pagination: {
                page: 1,
                rowsPerPage: 10,
                totalItems: 0
            },
            headersWilayah: [
                { text: 'No', align: 'left', sortable: false},
                { text: 'KD_Prov', value: 'kd_prov',  sortable: false },
                { text: 'Provinsi', value: 'provinsi', sortable: false },
                { text: 'Kode', value: 'kode_prov', sortable: false },
                { text: 'Kabupaten', value: 'kabupaten', sortable: false },
                { text: 'Kode', value: 'kode_kab', sortable: false },
                { text: 'Kecamatan', value: 'kecamatan', sortable: false },
                { text: 'Kode', value: 'kode_kec', sortable: false },
                { text: 'Kode Wilayah', value: 'kode_wilayah', sortable: false },
                { text: 'Desa', value: 'desa', sortable: false },
                { text: 'Zone', value: 'zone', sortable: false },
                { text: 'Bobot', value: 'bobot', sortable: false },
            ],
            itemsWilayah: [
                { kd_prov: 'Zoning', provinsi: '90%', kode_prov: '108', kabupaten: '100%', kode_kab: '120', kecamatan: 'Zoning', kode_kec: '90%', kode_wilayah: '108', desa: '100%', zone: '120', bobot: '' },
                { kd_prov: 'Nilai', provinsi: '0%', kode_prov: '0', kabupaten: '5%', kode_kab: '6', kecamatan: 'Zoning', kode_kec: '90%', kode_wilayah: '108', desa: '100%', zone: '120', bobot: '' },
                { kd_prov: 'Pindah Tugas', provinsi: '0%', kode_prov: '0', kabupaten: '5%', kode_kab: '6', kecamatan: 'Zoning', kode_kec: '90%', kode_wilayah: '108', desa: '100%', zone: '120', bobot: '' },
            ],
            headersZoning: [
                { text: 'No', align: 'left', sortable: false},
                { text: 'KD_Prov', value: 'kd_prov',  sortable: false },
                { text: 'Provinsi', value: 'provinsi', sortable: false },
                { text: 'Kode', value: 'kode_prov', sortable: false },
                { text: 'Kabupaten', value: 'kabupaten', sortable: false },
                { text: 'Kode', value: 'kode_kab', sortable: false },
                { text: 'Kecamatan', value: 'kecamatan', sortable: false },
                { text: 'Kode', value: 'kode_kec', sortable: false },
                { text: 'Kode Wilayah', value: 'kode_wilayah', sortable: false },
                { text: 'Desa', value: 'desa', sortable: false },
                { text: 'Zone', value: 'zone', sortable: false },
                { text: 'Bobot', value: 'bobot', sortable: false },
            ],
            itemsZoning: [
                { kd_prov: 'Zoning', provinsi: '90%', kode_prov: '108', kabupaten: '100%', kode_kab: '120', kecamatan: 'Zoning', kode_kec: '90%', kode_wilayah: '108', desa: '100%', zone: '120', bobot: '' },
                { kd_prov: 'Nilai', provinsi: '0%', kode_prov: '0', kabupaten: '5%', kode_kab: '6', kecamatan: 'Zoning', kode_kec: '90%', kode_wilayah: '108', desa: '100%', zone: '120', bobot: '' },
                { kd_prov: 'Pindah Tugas', provinsi: '0%', kode_prov: '0', kabupaten: '5%', kode_kab: '6', kecamatan: 'Zoning', kode_kec: '90%', kode_wilayah: '108', desa: '100%', zone: '120', bobot: '' },
            ],
            headersKartuKeluarga: [
                { text: 'No', align: 'left', sortable: false},
                { text: 'Umur Kartu Keluarga', value: 'umur',  sortable: false },
                { text: 'Bobot', value: 'bobot', sortable: false },
            ],
            itemsKartuKeluarga: [
                { kuota: 'Zoning', umur: '6 bulan', bobot: '' },
                { kuota: 'Nilai', umur: '1 tahun', bobot: '' },
                { kuota: 'Pindah Tugas', umur: '1.5 tahun', bobot: '' },
            ]
        }
    },
}
</script>
