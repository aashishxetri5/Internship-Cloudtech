<script setup>
import { defineProps, defineEmits, ref } from 'vue'


const props = defineProps({
    task: {
        type: Object,
        default: {
            title: "Wash dishes",
            status: false
        }
    },
    index: {
        type: Number
    }
})
const taskStatus = ref(props.task.status ? "complete" : "incomplete");


// mark task as complete
const markComplete = () => {
    !props.task.status;
}

const emit = defineEmits();
const deleteTask = (index) => {
    console.log(props);
    emit('remove-task', index);
}
</script>

<template>
    <div class="">

        <p v-if="task === null" class="empty-message">There are no to-dos to show</p>

        <label v-else class="list-item">
            <div class="list-item_container" style="display: flex; gap: 10px;">
                <input type="checkbox" v-model="props.task.status" @change="markComplete" />
                <span v-text="props.task.title" class="font-semibold"></span>
                <span>
                    <span v-text="task.status ? 'Completed' : 'Incomplete'" :class="taskStatus"></span>
                </span>
            </div>
            <button class="button button--text" @click.stop="deleteTask(props.index)">remove</button>
        </label>

    </div>
</template>

<!-- <style scoped>
.complete{
    background-color: aqua;
    font-size: .9rem;
    padding: 2px 5px;
    border-radius: 5px;
}
</style> -->
