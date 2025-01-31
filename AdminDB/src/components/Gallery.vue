<script setup>
import Image from './Image.vue';
import { computed, ref } from 'vue';

const name = ref('John Doe');

const avatarUrl = computed(() => {
    return `https://ui-avatars.com/api/?name=${name.value}&background=e74c3c&color=f0f3f4&font-wieght=800`;
});
</script>

<template>
    <div class="ms-16 mt-16">
        <input type="text" class="mb-8" v-model="name" placeholder="Enter your name" />
        <img :src="avatarUrl" alt="placeholder" />
        <Image> {{ "Caption for: " + name }} </Image>
    </div>
</template>