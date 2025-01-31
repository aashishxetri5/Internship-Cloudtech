<script setup>
import { onActivated, onBeforeMount, onBeforeUnmount, onBeforeUpdate, onDeactivated, onErrorCaptured, onMounted, onUnmounted, onUpdated, ref } from 'vue';
import ChildDemo from './ChildDemo.vue';

onBeforeMount(() => {
    alert('Hooks component will be mounted in a moment.');// 
});

onMounted(() => {
    document.querySelector('#lifecycle').textContent = 'Component is mounted';
});

onBeforeUnmount(() => {
    alert('beware!! Component is about to be unmounted.');
});

onUnmounted(() => {
    alert('Component is unmounted');
});

onBeforeUpdate(() => {
    setTimeout(() => {
        document.querySelector('#lifecycle').textContent = 
        'Component is about to be updated';
    }, 1000);
});

onUpdated(() => {
    setTimeout(() => {
        document.querySelector('#lifecycle').textContent = 'Component is updated';
    }, 1000);
});

onActivated(() => {
    setTimeout(() => {
        document.querySelector('#lifecycle').textContent = 'Component is activated';
    }, 1000);
});

onDeactivated(() => {
    setTimeout(() => {
        document.querySelector('#lifecycle').textContent = 'Component is deactivated';
    }, 1000);
});

onErrorCaptured(() => {
    alert('Error captured');
});

const counter = ref(0);

setInterval(() => {
    counter.value++;
}, 1000);

</script>

<template>
    <div class="ps-12 pt-12">
        <h1 class="text-6xl mt-8 mb-12 font-bold!">Hooks</h1>

        counter: {{ counter }}

        <ChildDemo :counter="counter" />

        <p class="text-4xl font-semibold!">Lifecycle Status</p>
        <p class="status mt-2 bg-slate-300 italic inline-block ps-2 pe-8 py-2" id="lifecycle"></p>
    </div>
</template>