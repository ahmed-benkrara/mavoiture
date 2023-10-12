import './bootstrap';
import { createApp } from 'vue';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import BudgetCars from './components/BudgetCars.vue'

const app = createApp()

app.component("cars", BudgetCars)

app.mount('#app')