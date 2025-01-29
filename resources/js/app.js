import './bootstrap';
import App from './App.vue';
import { createApp } from 'vue'
import router from './router';
const app = createApp(App)
.use(router)
router.isReady().then(() => {
    app.mount('#app')
})
