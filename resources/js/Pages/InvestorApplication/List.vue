<template>
    <authenticated-layout>
        <div class="flex justify-end">
            <a :href="route('investments')" class="bg-green-600 px-3 py-1 text-white font-bold rounded ">Buscar invertir</a>
        </div>
        <h1 class="text-4xl font-bold">Mis inversiones</h1>
        <div class="grid gap-3 mt-3">
            <div class="rounded-2xl p-3 bg-slate-300" v-for="item in investment" :key="item.id">
                <h3 class="text-2xl font-bold">{{ item.entrepreneurship.name}}</h3>
                <p>{{ item.entrepreneurship.description }}</p>
                <p>{{ item.benefits }}</p>
                <p>{{ item.terms }}</p>
            </div>
        </div>
    </authenticated-layout>
</template>
<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

    const props = defineProps({
        investments:{
            type:Object
        }
    })

    let investment =[]
    props.investments.forEach(element => {
        investment.push(element.investment)
    });


</script>