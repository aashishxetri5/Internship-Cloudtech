<script setup>

import ChangeStatus from './components/ChangeStatus.vue';
import Home from './components/Home.vue';
import ModalBinding from './components/ModalBinding.vue';
import Show from './components/Show.vue';


const link = 'https://www.google.com';

</script>

<template>
  <ChangeStatus />
  <div>
    <Home />
    <p>
      <a v-bind:href="link">Go to Google</a>
    </p>
  </div>
  <ModalBinding />
  <Show />
</template>
