<script setup>
import { ref } from 'vue';

var count = ref(0);

function increment() {
    return count.value++;
};

function decrement() {
    if (count.value === 0) {
        return;
    }
    return count.value--;
};

</script>

<template>
    <main>
        <section>
            <div class="mx-4">
                <h3 class="m-4 text-4xl">{{ count }}</h3>
                <button class="px-3 py-2 mx-4 bg-blue-500 text-white">
                    <span @click="increment">Increase</span>
                </button>
                <button class="px-3 py-2 mx-4 bg-red-500 text-white">
                    <span @click="decrement">Decrease</span>
                </button>
            </div>
        </section>
    </main>
</template>
