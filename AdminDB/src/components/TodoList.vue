<script setup>
import { computed, onMounted, onUnmounted, ref, watch } from 'vue';
import Task from './Task.vue';
import '../assets/todo.css';

const storedTasks = localStorage.getItem('tasks');
var tasks = ref(storedTasks ? JSON.parse(storedTasks) : []);
// var tasksToDisplay = ref(tasks.value);
const filterText = ref('');
const hideCompleted = ref(false);

const addTask = (e) => {
    let task = {
        title: e.target.task.value,
        status: false,
    }

    if (task.title.trim() === "") {
        document.querySelector("#new-todo input").focus();
    }

    tasks.value.push(task)
    e.target.task.value = ""
}

const save = () => {
    try {
        localStorage.setItem("tasks", JSON.stringify(tasks.value));
    } catch (error) {
        console.error(error)
        alert(error.message);
    }
}

const deleteTask = (index) => {
    tasks.value.splice(index, 1);
}

const tasksToDisplay = computed(() => {
    return tasks.value
        .filter(task => task.title.toLowerCase().includes(filterText.value.toLowerCase()))
        .filter(task => (hideCompleted.value ? !task.status : true));
});

const handleKeydown = (e) => {
    if (e.ctrlKey && e.shiftKey && e.key === "L") {
        console.log("Ctrl + Shift + L");
        tasks.value = [];
    }
    if (e.ctrlKey && e.shiftKey && e.key === "F") {
        document.querySelector("#search-text").focus();
    }
    if (e.ctrlKey && e.shiftKey && e.key === "H") {
        hideCompleted.value = !hideCompleted.value;
    }
}

onMounted(() => {
    document.querySelector("input").focus();
});

// onMounted(() => {
//     window.addEventListener('keydown', handleKeydown);
// });

// onUnmounted(() => {
//     window.removeEventListener('keydown', handleKeydown);
// });

watch(tasks, () => {
    save();
}, { deep: true })

defineExpose({ addTask });

</script>

<template>
    <div class="">
        <div class="container">
            <h1 class="header_title">To-do App</h1>
            <h2 class="header_subtitle">What do you need to do?</h2>
        </div>

        <div class="actions">
            <div class="actions__container">
                <input id="search-text" class="input" v-model="filterText" @keydown="handleKeydown" type="text"
                    name="search" placeholder="Filter todos">

                <label class="checkbox">
                    <input type="checkbox" id="hide-completed" v-model="hideCompleted"> Hide completed
                </label>
            </div>
            <div class="container">
                <h5>Shortcuts:</h5>
                <div>
                </div>
                <div>
                    <small style="display: block;">Press <small><code><i>Ctrl + Shift + L</i></code></small> to clear
                        all todo</small>
                    <small style="display: block;">Press <small><code><i>Ctrl + Shift + F</i></code></small> to search
                        todo</small>
                    <small style="display: block;">Press <small><code><i>Ctrl + Shift + H</i></code></small> to toggle
                        completed todo.</small>
                </div>
                <div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="todos">
                <!-- status should be false to show how many todo left -->
                <h2 class="list-title">You have {{ tasks.length || 0 }} todos</h2>
            </div>
            <Task v-for="(task, index) in tasksToDisplay" :task="task" :key="index" :index="index"
                @remove-task="deleteTask" />

            <form id="new-todo" @submit.prevent="addTask">
                <input type="text" class="input" placeholder="Something to do" name="task">
                <button class="button">Add Todo</button>
            </form>
        </div>
    </div>
</template>

<style></style>