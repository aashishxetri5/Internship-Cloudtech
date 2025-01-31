<script setup>
import { ref } from 'vue';
const status = ref('loading');
var title = ref("title");
var logo = ref("logo");

const name = "Admin Dashboard";
const content = "AdminDB";
</script>

<template>
    <div class="">

        <header v-if="status === 'active'">
            <p v-bind:class="title">Title: {{ name }}</p>
            <p :id="logo">Logo: {{ content }}</p>
        </header>
        <header v-else-if="status === 'loading'">
            <p v-bind:class="title">Loading...</p>
        </header>
        <header v-else="status === 'inactive'">
            <p :id="logo">Nothing to show</p>
        </header>
        <div>
            <p>Change Status</p>
            <button class="px-3 py-2 me-4 bg-blue-500 text-white" v-on:click="status = 'active'">Active</button>
            <button class="px-3 py-2 me-4 bg-blue-500 text-white" @click="status = 'inactive'">Inactive</button>
            <button class="px-3 py-2 me-4 bg-blue-500 text-white" @click="status = 'loading'">Loading</button>
        </div>
    </div>
</template>

<style scoped>
.title {
    color: red;
    font-size: 20px;
    font-weight: bold;
}

#logo {
    color: blue;
    font-size: 16px;
    font-weight: bold;
}
</style>