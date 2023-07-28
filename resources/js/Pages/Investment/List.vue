<template>
    <authenticated-layout>
        <div class="flex justify-end">
            <a :href="route('investors.myInvestor')" class="bg-green-600 px-3 py-1 text-white font-bold rounded ">Mis inversiones</a>
        </div>
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-2 grid gap-3.5 bg-slate-100">
                    <div class="border-b-2 hover:bg-slate-200 cursor-pointer" v-for="item in investments.data" :key="item.id" @click="getInvestment(item)">
                        <h5>{{ item.entrepreneurship.name }}</h5>
                        <p>{{ item.entrepreneurship.description }}</p>
                    </div>
                    <pagination :data="investments"/>
                </div>
                <div class="col-span-3">
                    <list-investment :investment="investment"/> 
                </div>
            </div>
    </authenticated-layout>
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Pagination from '@/Components/Pagination.vue'
    import ListInvestment from '@/Components/ListInvestment.vue'
    import Table from '@/Components/Table.vue'
    import { computed, onMounted, ref } from 'vue';
    const props = defineProps({
        investments:{
            type:Object
        },
    })

    let investment = ref(props.investments.data[0]);
    
    const getInvestment = (item) => {
        investment.value = item
    }
    

</script>