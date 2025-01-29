import { createRouter, createWebHistory } from "vue-router";


const home=()=>import('@/pages/Home.vue')
const routes=[
    {path:'/',component:home}
]


const router=createRouter({
    history:createWebHistory(),
    routes
})

window.addEventListener('vite:preloadError', (event) => {
    window.location.reload()
})

export default router
