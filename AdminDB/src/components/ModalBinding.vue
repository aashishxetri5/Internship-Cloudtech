<script setup>
import { onMounted, ref } from "vue";

const cars = ref(["Toyota", "Honda", "Ford", "Chevrolet", "Nissan"]);
const newCar = ref("");
function addCar() {
    if (newCar.value.trim() !== "") {
        cars.value.push(newCar.value);
        newCar.value = "";
    }
}

const deleteCar = (index) => {
    cars.value.splice(index, 1);
}
</script>

<template>
    <div>
        <form @submit.prevent="addCar">
            <label for="newCar">Add a car:</label>
            <input type="text" id="newCar" name="newCar" v-model="newCar" />
            <button type="submit">Submit</button>
        </form>

        <h3>Cars:</h3>
        <ul>
            <li v-for="(car, index) in cars" :key="car">
                <span>
                    {{ car }}
                </span>
                <button @click="deleteCar(index)">Del</button>
            </li>
        </ul>
    </div>
</template>
