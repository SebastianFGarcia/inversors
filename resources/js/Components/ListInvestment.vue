<template>
    <div class="grid gap-2">
        <div>
            <h2 class="text-3xl font-semibold">{{ investment.entrepreneurship.name }}</h2> 
        </div>
        <div>
            <p>{{ investment.entrepreneurship.description }}</p> 
        </div>
        <div>
            <p>Objetivos</p>
            <p>{{ investment.entrepreneurship.objective }}</p> 
        </div>
        <div>
            <p>Proyeción</p>
            <p>{{ investment.entrepreneurship.projection }}</p> 
        </div>
        <div>
            <p>Equipo</p>
            <p class="border-b-2 mb-2">{{ investment.entrepreneurship.team }}</p> 
        </div>
        <div>
            <p>Acerca de la inversion</p>
            <p>{{ investment.description }}</p> 
        </div>
        <div>
            <p>Terminos</p>
            <p>{{ investment.terms }}</p> 
        </div>
        <div>
            <p>Beneficios</p>
            <p>{{ investment.benefits }}</p> 
        </div>
    </div>
    <div class="flex justify-end mt-3">
        <a :href="route('investors.store',investment.id)" class="bg-green-600 py-1 px-3 rounded  text-white">Invertir</a>
    </div>
</template>
<script setup>

defineProps({
    investment:{
        type:Object
    }
})

</script>