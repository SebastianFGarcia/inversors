<template>
    <authenticated-layout>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white  sm:rounded-lg">
                    <form class="grid gap-2 md:gap-4 lg:gap-6 " @submit.prevent="update()">
                        <div class="flex flex-col w-full gap-4">
                            <h2 class="text-2xl font-bold">Crear Solicitud</h2>
                            <div>
                                <InputLabel for="description" value="Descripcion:" />
                                <TextAreaInput id="description" type="text" rows="5" placeholder="Descripcion" v-model="form.description" class="w-full md:w-10/12"/>
                                <InputError :message="form.errors.description" />
                            </div>
                            <div>
                                <InputLabel for="terms" value="Terminos:" />
                                <TextAreaInput id="terms" placeholder="Terminos:"
                                    class="w-full md:w-10/12" rows="5" v-model="form.terms" />
                                <InputError :message="form.errors.terms" />
                            </div>
                            <div>
                                <InputLabel for="benefits" value="Beneficios:" />
                                <TextAreaInput id="benefits" placeholder="Beneficios:"
                                    class="w-full md:w-10/12" rows="5" v-model="form.benefits" />
                                <InputError :message="form.errors.benefits" />
                            </div>
                            <div>
                                <InputLabel for="money" value="Dinero:" />
                                <TextAreaInput id="money" placeholder="Dinero"
                                    class="w-full md:w-10/12" rows="1" v-model="form.money" />
                                <InputError :message="form.errors.money" />
                            </div>
                        </div>
                        <div class="flex justify-end w-full md:w-10/12">
                            <button type="submit"  class="rounded-full bg-cyan-600 px-3 py-1 text-white font-bold" :disabled="form.processing"> Guardar </button>
                        </div>
                    </form>
                </div>
            </div>
    </authenticated-layout>  
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import  InputLabel   from '@/Components/InputLabel.vue';
import  TextAreaInput  from '@/Components/TextAreaInput.vue';
import  InputError  from '@/Components/InputError.vue';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    investment:{
        type: Object
    }
})

const form = useForm(
    {
        id:props.investment.id,
        money: String(props.investment.money),
        description: props.investment.description,
        terms:props.investment.terms,
        benefits:props.investment.benefits,
    }
)

const update = () =>{
    form.patch(route('investments.update'));
}


</script>
