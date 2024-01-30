<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
// import Welcome from '@/Components/Welcome.vue';
import Feed from '@/Pages/Feed.vue';

const props = defineProps({
    categories: {
        // type: Array,
        required: true
    },
    medias: {
        required: true
    },
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <Feed :categories="categories" :medias="medias" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
