import "./assets/main.css";

import { createApp } from "vue";
import {
  createRouter,
  createWebHashHistory,
  createWebHistory,
} from "vue-router";
import App from "./App.vue";

import Home from "./components/Home.vue";
import ChangeStatus from "./components/ChangeStatus.vue";
import ModelBinding from "./components/ModelBinding.vue";
import Show from "./components/Show.vue";
import TodoList from "./components/TodoList.vue";
import Hooks from "./components/Hooks.vue";
import DynamicComponents from "./components/DynamicComponents.vue";
import Gallery from "./components/Gallery.vue";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: "/", name: "Home", component: Home },
    { path: "/change-status", name: "Change Status", component: ChangeStatus },
    { path: "/model-binding", name: "ModelBinding", component: ModelBinding },
    { path: "/show", name: "show", component: Show },
    { path: "/todo-list", name: "todolist", component: TodoList },
    { path: "/hooks", name: "hooks", component: Hooks },
    { path: "/dc", name: "dc", component: DynamicComponents },
    { path: "/slot", name: "slot", component: Gallery },
  ],
});

createApp(App).use(router).mount("#app");
