import { createRouter, createWebHistory } from "vue-router";

const MainLayout=()=>import('./pages/layout.vue/main.vue')
const home = () => import('@/pages/Main/Home.vue')
const routes = [
    {
        path: '/',
        component:MainLayout,
        children:[
            {path:"",component:home}
        ]
    }
]


const router = createRouter({
    history: createWebHistory(),
    routes
})

window.addEventListener('vite:preloadError', (event) => {
    window.location.reload()
})

export default router
