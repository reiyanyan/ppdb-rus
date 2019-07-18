<template>
    <div>
        <h4 class="font-weight-regular">Pembobotan Nilai</h4>
        <v-card class="mt-4" style="border-radius: 7px">
            <v-card-title>
                <v-tabs v-model="active" light slider-color="blue" style="width: 100%">
                    <v-tab ripple>
                        Nilai UN
                    </v-tab>
                    <v-tab-item>
                        <v-card flat>
                            <v-data-table :headers="headers" :items="desserts" hide-actions :total-items="pagination.totalItems" :pagination.sync="pagination" class="elevation-1">
                                <template v-slot:items="props">
                                    <td class="text-xs-left">{{ props.index + 1 }}</td>
                                    <td class="text-xs-left">{{ props.jenis_nilai }}</td>
                                    <td class="text-xs-left">Bahasa Indonesia</td>
                                    <td class="text-xs-left">12</td>
                                    <td class="text-xs-left">987</td>
                                </template>
                            </v-data-table>
                        </v-card>
                    </v-tab-item>
                    <v-tab ripple>
                        Nilai UAS
                    </v-tab>
                    <v-tab-item>
                        <v-card flat>
                            <v-data-table :headers="headers" :items="desserts" class="elevation-1">
                                <template v-slot:items="props">
                                    <td class="text-xs-left">{{ props.index + 1 }}</td>
                                    <td class="text-xs-left">{{ props.jenis_nilai }}</td>
                                    <td class="text-xs-left">Bahasa Indonesia</td>
                                    <td class="text-xs-left">12</td>
                                    <td class="text-xs-left">987</td>
                                </template>
                            </v-data-table>
                        </v-card>
                    </v-tab-item>
                    <v-tab ripple>
                        Nilai Test Sekolah
                    </v-tab>
                    <v-tab-item>
                        <v-card flat>
                            <v-data-table :headers="headers" :items="desserts" class="elevation-1">
                                <template v-slot:items="props">
                                    <td class="text-xs-left">{{ props.index + 1 }}</td>
                                    <td class="text-xs-left">{{ props.jenis_nilai }}</td>
                                    <td class="text-xs-left">Bahasa Indonesia</td>
                                    <td class="text-xs-left">12</td>
                                    <td class="text-xs-left">987</td>
                                </template>
                            </v-data-table>
                        </v-card>
                    </v-tab-item>
                </v-tabs>
            </v-card-title>
        </v-card>
        
    </div>
</template>
<script>
export default {
    data() {
        return {
            email : '',
            active: null,
            pagination: {
                page: 1,
                rowsPerPage: 10,
                totalItems: 0
            },
            headers: [
                { text: 'No', align: 'left', sortable: false},
                { text: 'Jenis Nilai', value: 'jenis_nilai',  sortable: false },
                { text: 'Mata Pelajaran', sortable: false },
                { text: 'Kode', sortable: false },
                { text: 'Bobot', sortable: false },
            ],
            desserts: [
                { jenis_nilai: 'Frozen Yogurt' },
                { jenis_nilai: 'Ice cream sandwich' },
                { jenis_nilai: 'Eclair' },
                { jenis_nilai: 'Cupcake' },
                { jenis_nilai: 'Frozen Yogurt' },
                { jenis_nilai: 'Ice cream sandwich' },
                { jenis_nilai: 'Eclair' },
                { jenis_nilai: 'Cupcake' },
                { jenis_nilai: 'Frozen Yogurt' },
                { jenis_nilai: 'Ice cream sandwich' },
                { jenis_nilai: 'Eclair' },
                { jenis_nilai: 'Cupcake' },
                { jenis_nilai: 'Frozen Yogurt' },
                { jenis_nilai: 'Ice cream sandwich' },
                { jenis_nilai: 'Eclair' },
                { jenis_nilai: 'Cupcake' },
                { jenis_nilai: 'Frozen Yogurt' },
                { jenis_nilai: 'Ice cream sandwich' },
                { jenis_nilai: 'Eclair' },
                { jenis_nilai: 'Cupcake' },
            ],
            
        }
    },
    computed: {
        pages () {
            if (this.pagination.rowsPerPage == null || this.pagination.totalItems == null ) return 0
            return Math.ceil(this.pagination.totalItems / this.pagination.rowsPerPage)
        }
    },
}
</script>
