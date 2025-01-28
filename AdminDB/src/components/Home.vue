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
            <div class="">
                <h3>{{ count }}</h3>
                <button>
                    <span @click="increment">Increase</span>
                </button>
                <button>
                    <span @click="decrement">Decrease</span>
                </button>
            </div>
        </section>
    </main>
</template>
