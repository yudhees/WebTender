<template>
    <section class="section home-banner row-middle home-two">
       <div class="container">
          <div class="row align-items-center">
             <div class=" col-lg-6 col-md-12">
                <div class="banner-content aos" data-aos="fade-up">
                   <div class="market-place">
                      <h3>With the world's #1 Online Tenders Services</h3>
                   </div>
                   <h1>Get Latest Tenders,RFPs,News,Procurement & Bid.</h1>
                   <form class="form" name="store" id="store" @submit.prevent="submit">
                      <div class="form-inner">
                         <div class="input-group">
                            <span class="drop-detail">
                               <select class="form-control select" name="storeID">
                                  <option value="project.html">Projects</option>
                                  <option value="developer.html">Freelancers</option>
                               </select>
                            </span>
                            <input type="text" class="form-control" placeholder="Keywords" v-model="search">
                            <button class="btn btn-primary sub-btn" type="submit" :disabled="!search">Search</button>
                         </div>
                      </div>
                   </form>
                   <div class="home-count">
                      <ul class="nav">
                         <li class="course-count"><span class="counter-up">9,207</span><span class="list-count">Freelance developers</span></li>
                         <li class="course-count"><span class="counter-up">6000 </span><span>+</span><span class="list-count">Projects Added</span></li>
                         <li class="course-count"><span class="counter-up">919,207</span><span class="list-count">Completed projects</span></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-md-4 col-lg-5">
                <div class="banner-two-img aos" data-aos="fade-up">
                   <img :src="asset('assets/img/home-two-banner-bg-01.png')" class="img-fluid trusted-user-img aos" data-aos="zoom-in" alt="banner" data-aos-duration="3000">
                   <img :src="asset('assets/img/home-two-banner-bg-02.png')" class="img-fluid best-marketing-img aos" data-aos="zoom-in" alt="banner" data-aos-duration="3000">
                </div>
             </div>
          </div>
       </div>
    </section>
 </template>
<script setup>
import { asset } from '@/composables/global';
import { ref } from 'vue';
import { useRouter } from 'vue-router';
const search=ref('')
const router=useRouter()
const submit=async()=>{
    router.push({name:'search',query:{search:search.value}})
}
</script>
