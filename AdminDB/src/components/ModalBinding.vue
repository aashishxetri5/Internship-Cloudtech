<script setup>
import { ref } from 'vue';

const cars = ref(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan']);
const newCar = ref('');
function addCar() {
    if (newCar.value.trim() !== '') {
        cars.value.push(newCar.value)
        newCar.value = ''
    }
}
</script>

<template>
    <div>
        <form @submit.prevent="addCar">
            <label for="newCar">Add a car:</label>
            <input type="text" id="newCar" name="newCar" v-model="newCar">
            <button type="submit">Submit</button>
        </form>

        <h3>Cars:</h3>
        <ul>
            <li v-for="car in cars" :key="car">{{ car }}</li>
        </ul>
    </div>
</template>