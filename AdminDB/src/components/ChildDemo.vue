<script setup>


const props = defineProps({
    counter: Number
});

</script>

<template>
    <div>
        <h1>Child Component</h1>
        <p>Counter: {{ counter }}</p>
    </div>
</template>