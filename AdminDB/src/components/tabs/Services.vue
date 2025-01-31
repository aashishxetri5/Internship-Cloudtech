<script setup>

const changeValue = () => {
    document.querySelector('p#services').textContent = 'Services was clicked Value';
}

</script>

<template>
    <div>
        <h1 @click="changeValue">Services</h1>
        <p id="services">This is the services page</p>
    </div>
</template>