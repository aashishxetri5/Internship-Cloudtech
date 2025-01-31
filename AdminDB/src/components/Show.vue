<script setup>
import { ref } from 'vue';
var isVisible = ref(true);
const changeVisibility = () => {
    isVisible.value = !isVisible.value;
}
</script>

<template>
    <div class="ps-12 pt-12">
        <button class="px-3 py-2 rounded-lg bg-blue-500 text-white" v-on:click="changeVisibility()"
            v-text="isVisible ? 'Hide Text' : 'Show Text'"></button>
        <div class="" style="width: 300px;" v-show="isVisible">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Provident quam pariatur laboriosam adipisci
                laborum dolore accusantium ea consequatur, dolores quis libero,
                sapiente quos voluptatibus animi
                blanditiis illo. Reprehenderit, perspiciatis veniam!</p>
        </div>
    </div>
</template>