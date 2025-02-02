<template>
    <section class="section projects">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-12 mx-auto">
            <div class="section-header section-header-two text-center aos aos-init aos-animate" data-aos="fade-up">
               <h2 class="about-contents">World Wide Tender Provides</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-3 col-md-6">
            <div class="great-blk aos aos-init aos-animate" data-aos="fade-up">
               <div class="great-icon">
                  <img :src="asset('assets/img/icon/great-icon-01.svg')" alt="Img">
               </div>
               <div class="great-content">
                  <h4>Browse portfolios</h4>
                  <p>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6">
            <div class="great-blk aos aos-init aos-animate" data-aos="fade-up">
               <div class="great-icon">
                  <img :src="asset('assets/img/icon/great-icon-02.svg')" alt="Img">
               </div>
               <div class="great-content">
                  <h4>Fast bids</h4>
                  <p>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid on within 60 seconds.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6">
            <div class="great-blk aos aos-init aos-animate" data-aos="fade-up">
               <div class="great-icon">
                  <img :src="asset('assets/img/icon/great-icon-03.svg')" alt="Img">
               </div>
               <div class="great-content">
                  <h4>Quality work</h4>
                  <p>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid on within 60 seconds.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6">
            <div class="great-blk aos aos-init aos-animate" data-aos="fade-up">
               <div class="great-icon">
                  <img :src="asset('assets/img/icon/great-icon-04.svg')" alt="Img">
               </div>
               <div class="great-content">
                  <h4>Track progress</h4>
                  <p>Keep up-to-date and on-the-go with our time tracker, and mobile app. Always know what freelancers are up to.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</template>
<script setup>
import { asset } from '@/composables/global';
</script>
