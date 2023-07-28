<template>
    <div class="flex flex-col justify-center sm:flex-row sm:justify-between  items-center py-3 gap-3">
        <nav aria-label="Pagination" v-if="data.last_page > 1">
            <ul class="inline-flex items-center -space-x-px">
                <li v-for="page in data.links" :key="page">
                    <button
                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-200 hover:text-gray-700"
                        :class="{ 'bg-gray-400 text-gray-700 hover:bg-gray-400 ': page.active }"
                        :disabled="page.active || page.url === null" v-html="page.label" @click="getPage(page.url)" />
                </li>
            </ul>
        </nav>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    data: {
        type: Object,
    },
});

const data = props.data;
const page = ref(data.current_page);

function getPage(url) {
    window.location.href=url
}
</script>