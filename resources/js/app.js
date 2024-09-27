import { createApp } from 'vue';
import App from './src/App.vue';
import Router from './src/router/router.js';
//import Store from '@/store/store.js';

createApp(App).use(Router).mount('#app');
