<script setup>
import { ref } from "vue";

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
    <div class="ps-8">
        <form @submit.prevent="addCar">
            <label class="block" for="newCar">Add a car:</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg" type="text" id="newCar" name="newCar" v-model="newCar" />
            <button class="bg-gray-50 border border-gray-300 text-gray-900 ms-4 px-2 rounded-lg" type="submit">Submit</button>
        </form>

        <h3 class="mt-4">Cars:</h3>
        <ul class="list-disc list-inside">
            <li v-for="(car, index) in cars" :key="car">
                <span>
                    {{ car }}
                </span>
                <button @click="deleteCar(index)">Del</button>
            </li>
        </ul>
    </div>
</template>
