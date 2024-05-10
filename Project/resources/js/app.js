import './bootstrap';
import '../css/app.css'
import { createApp } from 'vue';
import IncrementCounter from './components/frontend/IncrementCounter.vue';

createApp(IncrementCounter).mount('#app')