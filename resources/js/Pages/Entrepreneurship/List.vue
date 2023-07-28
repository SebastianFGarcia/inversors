<template>
    <AuthenticatedLayout>
        <div class="flex justify-between mb-3">
            <h2 class="text-2xl font-semibold ">Mis emprendimientos</h2>
            <a :href="route('entrepreneurships.create')" class="bg-green-600 p-1 rounded "><IconCirclePlus class="text-white"/></a>
        </div>

        <div class="grid gap-2" v-if="entrepreneurships.data[0]" >
            <a :href="route('entrepreneurships.show',item.id)" class="bg-slate-200 rounded-xl p-3" v-for="item in entrepreneurships.data" :key="item.id">
                <h1 class="text-lg font-semibold">{{ item.name }}</h1>
                <p>{{ item.description }}</p>
            </a>
        </div>
        <div v-else class="bg-slate-200 rounded-xl p-3">
            <h1 class="text-lg text-center font-semibold">No tienes emprendimientos agregados</h1>
        </div>
        <Pagination :data="entrepreneurships" />
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue'
import Table from '@/Components/Table.vue'
import { IconCirclePlus } from '@tabler/icons-vue';
const props = defineProps({
    entrepreneurships: {
        type: Object
    },
})

const columns = [
    {
        name: 'Nombre',
        key: 'name',
    }
]
</script>