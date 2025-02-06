import './bootstrap';
import App from './App.vue';
import { createApp } from 'vue'
import router from './router';
import {debounce} from '@/composables/debounce.js'
const app = createApp(App)
.use(router)
.directive('debounce',debounce)
router.isReady().then(() => {
    app.mount('#app')
})
