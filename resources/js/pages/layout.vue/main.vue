<template>
    <div class="main-wrapper">
    <Header v-once/>
    <router-view></router-view>
    <Footer v-once/>
    </div>
</template>
<script setup>
import Footer from './Footer.vue';
import Header from './header.vue';
</script>
