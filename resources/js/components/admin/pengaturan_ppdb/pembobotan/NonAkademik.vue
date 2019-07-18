<template>
    <div>
        <h4 class="font-weight-regular">Pembobotan Non Akademik</h4>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <div style="width: 100%">
                    <h4 class="font-weight-regular">Prestasi</h4>
                    <v-data-table :headers="headersPrestasi" :items="itemsPrestasi" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="mt-2 elevation-1" >
                        <template v-slot:items="props">
                            <td class="text-xs-left">{{ props.item.bidang }}</td>
                            <td class="text-xs-left">{{ props.item.tingkat }}</td>
                            <td class="text-xs-left">{{ props.item.level }}</td>
                            <td class="text-xs-left">{{ props.item.kode }}</td>
                            <td class="text-xs-left">{{ props.item.bobot }}</td>
                            <td class="text-xs-left">
                                <v-icon color="green">info</v-icon>
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
            pagination: {
                page: 1,
                rowsPerPage: 100,
                totalItems: 0
            },
            headersPrestasi: [
                { text: 'Bidang', align: 'left', value: 'bidang', sortable: false},
                { text: 'Tingkat Kejuruan', align: 'left', value: 'tingkat', sortable: false},
                { text: 'Level Juara', align: 'left', value: 'level', sortable: false},
                { text: 'Kode', align: 'left', value: 'kode', sortable: false},
                { text: 'Bobot', align: 'left', value: 'bobot', sortable: false},
                { text: 'Info', align: 'left', value: 'bobot', sortable: false},
            ],
            itemsPrestasi: [
                { bidang: 'Non Akademik', tingkat: 'Internasional', level: 'I', kode: 'N/I/1', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Internasional', level: 'II', kode: 'N/I/2', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Internasional', level: 'III', kode: 'N/I/3', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Nasional', level: 'I', kode: 'N/N/1', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Nasional', level: 'II', kode: 'N/N/2', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Nasional', level: 'III', kode: 'N/N/3', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Provinsi', level: 'I', kode: 'N/P/1', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Provinsi', level: 'II', kode: 'N/P/2', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Provinsi', level: 'III', kode: 'N/P/3', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Kab/Kota', level: 'I', kode: 'N/K/1', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Kab/Kota', level: 'II', kode: 'N/K/2', bobot: '' },
                { bidang: 'Non Akademik', tingkat: 'Kab/Kota', level: 'III', kode: 'N/K/3', bobot: '' },
            ]
        }
    },
}
</script>
