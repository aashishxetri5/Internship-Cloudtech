<script setup>

const changeValue = () => {
    document.querySelector('p#contact').textContent = 'Contact was clicked Value';
}

</script>

<template>
    <div>
        <h1 @click="changeValue">Contact</h1>
        <p id="contact">This is the contact page</p>
    </div>
</template>