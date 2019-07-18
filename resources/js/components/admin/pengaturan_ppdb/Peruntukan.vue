<template>
    <div>
        <h4 class="font-weight-regular">Peruntukan</h4>
        <v-card class="mt-3">
            <v-data-table :headers="headers" :items="desserts" class="elevation-1">
                <template v-slot:items="props">
                    <td class="text-xs-left">{{ props.index + 1 }}</td>
                    <td class="text-xs-left">
                        <v-radio-group>
                            <v-radio :label="props.item.peruntukan" value="radio-1"></v-radio>
                        </v-radio-group>
                    </td>
                    <td class="text-xs-left"><v-switch v-model="switch1"></v-switch></td>
                    <td class="text-xs-left">
                        <v-switch v-model="switch1" ></v-switch>
                    </td>
                </template>
            </v-data-table>
        </v-card>
    </div>
</template>
<script>
export default {
    data() {
        return {
            switch1: true,
            headers: [
                { text: 'No', align: 'left', sortable: false},
                { text: 'Peruntukan', value: 'peruntukan',  sortable: false },
                { text: 'Negeri', sortable: false },
                { text: 'Zonasi', sortable: false },
            ],
            desserts: [
                { peruntukan: 'Frozen Yogurt' },
                { peruntukan: 'Ice cream sandwich' },
                { peruntukan: 'Eclair' },
                { peruntukan: 'Cupcake' },
            ],
        }
    },
}
</script>
