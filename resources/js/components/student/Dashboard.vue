<template>
    <div>
        <div v-if="accept">
            <v-card class="mx-auto" max-width="600">
                <v-layout align-center justify-center>
                    <v-flex xs3>
                        <v-layout align-center class="ml-2 my-3">
                            <v-avatar color="grey darken-3" size="100px">
                                <v-img class="elevation-6" src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"></v-img>
                            </v-avatar>
                        </v-layout>
                    </v-flex>
                    <v-flex xs8>
                        <h4 class="font-weight-light">Username</h4>
                        "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                    </v-flex>
                </v-layout>
                <v-card-actions>
                    <v-btn flat style="pointer-events: none">Hasil</v-btn>
                    <v-spacer></v-spacer>
                    <v-btn icon @click="show = !show">
                        <v-icon>{{ show ? 'keyboard_arrow_down' : 'keyboard_arrow_up' }}</v-icon>
                    </v-btn>
                </v-card-actions>
                <v-slide-y-transition>
                    <v-card-text v-show="show">
                        <h4 class="font-weight-medium">Jumlah Skor: </h4>
                    </v-card-text>
                </v-slide-y-transition>

            </v-card>
            <v-data-table :headers="headers" :items="items" class="elevation-1 mt-4">
                <template v-slot:items="props">
                    <td>{{ props.item.name }}</td>
                    <td class="text-xs-right">{{ props.item.calories }}</td>
                    <td class="text-xs-right">{{ props.item.fat }}</td>
                    <td class="text-xs-right">{{ props.item.carbs }}</td>
                    <td class="text-xs-right">{{ props.item.protein }}</td>
                    <td class="text-xs-right">{{ props.item.iron }}</td>
                </template>
            </v-data-table>
        </div>
        <v-card v-else class="mx-auto" max-width="600">
            <v-card-text>
                <v-layout align-center justify-center>
                    <v-flex xs3>
                        <v-layout align-center class="ml-2">
                            <v-avatar color="grey darken-3" size="100px">
                                <v-img class="elevation-6" src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"></v-img>
                            </v-avatar>
                        </v-layout>
                    </v-flex>
                    <v-flex xs8>
                        Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well.
                    </v-flex>
                </v-layout>
            </v-card-text>
        </v-card>
    </div>
</template>
<script>
export default {
    data() {
        return {
            show: false,
            accept: true,
            headers: [
                { text: 'Dessert (100g serving)', align: 'left', sortable: false, value: 'name' },
                { text: 'Calories', value: 'calories' },
                { text: 'Fat (g)', value: 'fat' },
                { text: 'Carbs (g)', value: 'carbs' },
                { text: 'Protein (g)', value: 'protein' },
                { text: 'Iron (%)', value: 'iron' }
            ],
            items: [
                { name: 'Frozen Yogurt', calories: 159, fat: 6.0, carbs: 24, protein: 4.0, iron: '1%' },
                { name: 'Ice cream sandwich', calories: 237, fat: 9.0, carbs: 37, protein: 4.3, iron: '1%' },
                { name: 'Eclair', calories: 262, fat: 16.0, carbs: 23, protein: 6.0, iron: '7%' },
                { name: 'Cupcake', calories: 305, fat: 3.7, carbs: 67, protein: 4.3, iron: '8%'},
                { name: 'Gingerbread', calories: 356, fat: 16.0, carbs: 49, protein: 3.9, iron: '16%'},
                { name: 'Jelly bean', calories: 375, fat: 0.0, carbs: 94, protein: 0.0, iron: '0%'},
                { name: 'Lollipop', calories: 392, fat: 0.2, carbs: 98, protein: 0, iron: '2%'},
                { name: 'Honeycomb', calories: 408, fat: 3.2, carbs: 87, protein: 6.5, iron: '45%'},
                { name: 'Donut', calories: 452, fat: 25.0, carbs: 51, protein: 4.9, iron: '22%'},
                { name: 'KitKat', calories: 518, fat: 26.0, carbs: 65, protein: 7, iron: '6%'}
            ],
        }
    },
}
</script>
