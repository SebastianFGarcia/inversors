<template>
    <AuthenticatedLayout>
        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-3 grid">
                <div class="flex justify-between mb-3">
                    <h2 class="text-2xl font-semibold">{{ entrepreneurship.name }}</h2>
                    <a :href="route('entrepreneurships.edit',entrepreneurship.id)" class="bg-green-600 p-1 rounded "><IconEdit class="text-white"/></a>
                </div>
                <p class="text-lg pb-3">{{ entrepreneurship.description }}</p>
                <div class="pb-3">
                    <p class="text-lg font-semibold">Objetivos</p>
                    <p class="text-lg ">{{ entrepreneurship.objective }}</p>
                </div>
                <div class="pb-3">
                    <p class="text-lg font-semibold">Proyección</p>
                    <p class="text-lg ">{{ entrepreneurship.projection }}</p>
                </div>
                <div class="pb-3">
                    <p class="text-lg font-semibold">Equipo</p>
                    <p class="text-lg ">{{ entrepreneurship.team }}</p>
                </div>
                <div class="flex justify-between mb-3">
                    <h2 class="text-2xl font-semibold ">Solicitudes</h2>
                    <a :href="route('investments.create',entrepreneurship.id)" class="bg-green-600 p-1 rounded "><IconCirclePlus class="text-white"/></a>
                </div>
                <div v-for="item in entrepreneurship.investments" :key="item.id">
                    <div class="flex justify-between mb-3">
                        <h2 class="text-2xl font-semibold">Solicitud de inversion</h2>
                        <a :href="route('investments.edit',item.id)" class="bg-green-600 p-1 rounded "><IconEdit class="text-white"/></a>
                    </div>
                    
                    <p class="text-lg ">{{ item.description }}</p>
                    <p class="text-lg ">{{ item.terms }}</p>
                    <p class="text-lg ">{{ item.benefits }}</p>
                </div>
            </div>
            <div class="col-span-2 ">
                <h2 class="text-2xl font-semibold pb-3">Invesionistas</h2>
                <div v-for="investments in entrepreneurship.investments" :key="investments.id">
                    <div v-for="item in investments.investor_applications" :key="item.id">
                        <h2>{{ item.user.name }}</h2>
                        <p>{{ item.user.email }}</p>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue'
import { IconEdit, IconCirclePlus } from '@tabler/icons-vue';
const props = defineProps({
    entrepreneurship: {
        type: Object
    },
})
</script>