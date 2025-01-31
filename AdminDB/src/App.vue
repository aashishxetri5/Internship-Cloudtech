<script setup>

import { RouterLink, RouterView } from 'vue-router';

const link = 'https://www.google.com';

</script>

<template>
  <div class=" min-h-screen">
    <nav class="bg-blue-400 py-5 flex justify-center width-full gap-4">
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/change-status">Change Status</RouterLink>
      <RouterLink to="/model-binding">Modal Binding</RouterLink>
      <RouterLink to="/show">Show</RouterLink>
      <RouterLink to="/todo-list">Todo List</RouterLink>
      <RouterLink to="/hooks">Hooks</RouterLink>
      <RouterLink to="/dc">Dynamic Components</RouterLink>
      <RouterLink to="/slot">Slots</RouterLink>
    </nav>

    <div class="">
      <RouterView />
    </div>
  </div>

</template>
