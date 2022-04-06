<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Entrance" />

    <ul>
        <li><a href="/cards">cards</a></li>
        <li><a href="/layer-card">layer-card</a></li>
        <li><a href="/perspective-card">perspective-card</a></li>
    </ul>
</template>
