
<template>
   <HomeSlider/>
   <Aboutus/>
   <Category/>
   <FutureTender/>
   <Regions/>
   <Client/>
</template>
<script setup>
import { onMounted } from 'vue';
import Aboutus from './components/Aboutus.vue';
import Category from './components/Category.vue';
import Client from './components/Client.vue';
import FutureTender from './components/FutureTender.vue';
import HomeSlider from './components/HomeSlider.vue';
import Regions from './components/Regions.vue';
onMounted(()=>{
    AOS.init();
})
</script>
