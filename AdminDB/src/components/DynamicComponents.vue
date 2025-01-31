<script setup>
import { ref } from 'vue';
import About from './tabs/About.vue';
import Contact from './tabs/Contact.vue';
import Services from './tabs/Services.vue';

const current = ref('About');

const tabs = {
    About,
    Contact,
    Services,
}
</script>

<template>
    <div>
        <div>
            <button class="bg-slate-400 px-4" v-for="(_, tab) in tabs" 
            :key="tab" @click="current = tab">
                {{ tab }}
            </button>
        </div>
        <div>
            <component :is="tabs[current]" />
        </div>
    </div>
</template>