<template>
    <div>
        <h4 class="font-weight-regular">Pembobotan Kuota</h4>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Kuota Sistem Zonasi</h4>
                    <h5 class="font-weight-thin">Daya Tampung : 360</h5>
                    <v-data-table :headers="headersZonasi" :items="itemsZonasi" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.index + 1}}</td>
                            <td class="text-xs-left">{{ props.item.kuota }}</td>
                            <td class="text-xs-left">{{ props.item.minpersen }}</td>
                            <td class="text-xs-left">{{ props.item.minkuota }}</td>
                            <td class="text-xs-left">{{ props.item.maxpersen }}</td>
                            <td class="text-xs-left">{{ props.item.maxkuota }}</td>
                        </template>
                    </v-data-table>
                </div>
                <v-btn class="ml-0 mt-3" color="purple" dark>Tambah Kriteria</v-btn>
            </v-card-title>
        </v-card>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Kuota Sistem Non Zonasi</h4>
                    <h5 class="font-weight-thin">Daya Tampung : 360</h5>
                    <v-data-table :headers="headersZonasi" :items="itemsZonasi" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.index + 1}}</td>
                            <td class="text-xs-left">{{ props.item.kuota }}</td>
                            <td class="text-xs-left">{{ props.item.minpersen }}</td>
                            <td class="text-xs-left">{{ props.item.minkuota }}</td>
                            <td class="text-xs-left">{{ props.item.maxpersen }}</td>
                            <td class="text-xs-left">{{ props.item.maxkuota }}</td>
                        </template>
                    </v-data-table>
                </div>
                <v-btn class="ml-0 mt-3" color="purple" dark>Tambah Kriteria</v-btn>
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
            headersZonasi: [
                { text: 'No', align: 'left', sortable: false},
                { text: 'Kuota', value: 'kuota',  sortable: false },
                { text: 'Min %', value: 'minpersen', sortable: false },
                { text: 'Min Kuota', value: 'minkuota', sortable: false },
                { text: 'Max %', value: 'maxpersen', sortable: false },
                { text: 'Max Kuota', value: 'maxkuota', sortable: false },
            ],
            itemsZonasi: [
                { kuota: 'Zoning', minpersen: '90%', minkuota: '108', maxpersen: '100%', maxkuota: '120' },
                { kuota: 'Nilai', minpersen: '0%', minkuota: '0', maxpersen: '5%', maxkuota: '6' },
                { kuota: 'Pindah Tugas', minpersen: '0%', minkuota: '0', maxpersen: '5%', maxkuota: '6' },
            ]
        }
    },
}
</script>
