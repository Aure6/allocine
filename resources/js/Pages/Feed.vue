<script setup>
import { Link, router, useForm } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { ref } from "vue";
// import { defineProps } from 'vue';

const props = defineProps({
    categories: {
        // type: Array,
        required: true
    },
    medias: {
        required: true
    },
});
// const props = defineProps(["medias", "categories"]);
console.log(props.categories);
console.log(props.medias);
</script>
<template>
    <div>
        <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
            <!-- Categories Dropdown -->
            <div class="relative ms-3">
                <Dropdown :categories="categories" align="left" width="48">
                    <template #trigger>
                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                <!-- {{ $page.props.auth.user.name }} -->

                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </span>
                    </template>

                    <template #content>
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Categories
                        </div>

                        <DropdownLink v-for="category in categories" :key="category.id">
                            {{ category.name }}
                        </DropdownLink>

                        <!-- <DropdownLink :href="route('profile.show')">
                            Profile
                        </DropdownLink>

                        <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                            API Tokens
                        </DropdownLink> -->

                        <div class="border-t border-gray-200" />

                        <!-- Authentication -->
                        <!-- <form @submit.prevent="logout">
                            <DropdownLink as="button">
                                Log Out
                            </DropdownLink>
                        </form> -->
                    </template>
                </Dropdown>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-2 lg:gap-8 lg:p-8">
            <div v-for="media in medias.data" :key="media.id" class="p-1 bg-white">
                {{ media.title }}
            </div>
            <div class="p-1 bg-white">
                {{ medias.links }}
            </div>
        </div>
    </div>
</template>
