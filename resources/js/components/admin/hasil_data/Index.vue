<template>
    <div>
        <h4 class="font-weight-regular">Hasil Data</h4>
        <!-- <div style="width: 100%"> -->
            <v-data-table :headers="headers" :items="items" class="mt-2 elevation-1" >
                <template v-slot:items="props">
                    <td class="text-xs-left">{{ props.item.no_pendaftaran }}</td>
                    <td class="text-xs-left">{{ props.item.username }}</td>
                    <td class="text-xs-left">{{ props.item.nama }}</td>
                    <td class="text-xs-left">{{ props.item.tanggal_lahir }}</td>
                    <td class="text-xs-left">{{ props.item.asal_sekolah }}</td>
                    <td class="text-xs-left">{{ props.item.jalur_penerimaan }}</td>
                    <td class="text-xs-left">{{ props.item.hasil }}</td>
                </template>
            </v-data-table>
        <!-- </div> -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            headers: [
                { text: 'No Pendaftaran', align: 'left', sortable: false, value: 'no_pendaftaran' },
                { text: 'Username', value: 'username' },
                { text: 'Nama', value: 'nama' },
                { text: 'Tanggal Lahir', value: 'tanggal_lahir' },
                { text: 'Asal Sekolah', value: 'asal_sekolah' },
                { text: 'Jalur Penerimaan', value: 'jalur_penerimaan' },
                { text: 'Hasil', align: 'left', value: 'hasil', sortable: false},
            ],
            items: [
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
                { no_pendaftaran: 159, username: 6.0, nama: 24, tanggal_lahir: 4.0, asal_sekolah: '14', jalur_penerimaan: '12 Juli 2019', hasil: 98 },
            ],
        }
    },
}
</script>
