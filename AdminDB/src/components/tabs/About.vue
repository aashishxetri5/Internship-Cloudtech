<script setup>

const changeValue = () => {
    document.querySelector('p#about').textContent = 'About was clicked Value';
}

</script>

<template>
    <div class="px-4 py-4">
        <h1 @click="changeValue">About</h1>
        <p id="about">This is the about page</p>
    </div>
</template>