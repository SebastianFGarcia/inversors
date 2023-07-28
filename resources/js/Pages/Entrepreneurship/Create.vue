<template>
    <authenticated-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white  sm:rounded-lg">
                    <form class="grid gap-2 md:gap-4 lg:gap-6 " @submit.prevent="save()">
                        <div class="flex flex-col w-full gap-4">
                            <h2 class="text-2xl font-bold">Crear Emprendimiento</h2>
                            <div>
                                <InputLabel for="name" value="Nombre:" />
                                <TextAreaInput id="name" type="text" rows="1" placeholder="Nombre" 
                                    v-model="form.name" autofocus class="w-full md:w-10/12"/>
                                <InputError :message="form.errors.name" />
                            </div>
                            <div>
                                <InputLabel for="description" value="Descripcion:" />
                                <TextAreaInput id="description" type="text" rows="5" placeholder="Descripcion" v-model="form.description" class="w-full md:w-10/12"/>
                                <InputError :message="form.errors.description" />
                            </div>
                            <div>
                                <InputLabel for="objective" value="Objetivos:" />
                                <TextAreaInput id="objective" placeholder="Objetivos"
                                    class="w-full md:w-10/12" rows="5" v-model="form.objective" />
                                <InputError :message="form.errors.objective" />
                            </div>
                            <div>
                                <InputLabel for="projection" value="Proyección:" />
                                <TextAreaInput id="projection" placeholder="Proyección"
                                    class="w-full md:w-10/12" rows="5" v-model="form.projection" />
                                <InputError :message="form.errors.projection" />
                            </div>
                            <div>
                                <InputLabel for="team" value="Equipo:" />
                                <TextAreaInput id="team" placeholder="Equipo"
                                    class="w-full md:w-10/12" rows="5" v-model="form.team" />
                                <InputError :message="form.errors.team" />
                            </div>
                        </div>
                        <div class="flex justify-end w-full md:w-10/12">
                            <button type="submit"  :disabled="form.processing"> Guardar </button>
                        </div>
                    </form>
                </div>
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

const form = useForm(
    {
        name:'',
        description:'',
        objective:'',
        projection:'',
        team:''
    }
)

const save = () =>{
    form.post(route('entrepreneurships.store'));
}


</script>
