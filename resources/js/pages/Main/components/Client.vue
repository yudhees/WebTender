<template>
    <section class="section top-company-two border-bottom-0">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="section-header section-header-two text-center aos aos-init aos-animate" data-aos="fade-up">
                   <h2 class="about-contents" style="font-size: 40px;">Trusted By The  <span> World’s Best</span></h2>
                   <p style="font-size: 14px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
             </div>
          </div>
          <div id="company-slider" class="owl-carousel owl-theme testimonial-slider aos owl-loaded owl-drag aos-init aos-animate" data-aos="fade-up">
             <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1540px, 0px, 0px); transition: 2s; width: 4400px;">
                   <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                      <div class="company-logos">
                         <img :src="asset('assets/img/company-logo-03.svg')" alt="Company Logo">
                      </div>
                   </div>
                   <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                      <div class="company-logos">
                         <img :src="asset('assets/img/company-logo-04.svg')" alt="Company Logo">
                      </div>
                   </div>
                   <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                      <div class="company-logos">
                         <img :src="asset('assets/img/company-logo-05.svg')" alt="Company Logo">
                      </div>
                   </div>
                   <div class="owl-item cloned" style="width: 196px; margin-right: 24px;">
                      <div class="company-logos">
                         <img :src="asset('assets/img/company-logo-06.svg')" alt="Company Logo">
                      </div>
                   </div>
                   <div class="owl-item" style="width: 196px; margin-right: 24px;">
                      <div class="company-logos">
                         <img :src="asset('assets/img/company-logo-01.svg')" alt="Company Logo">
                      </div>
                   </div>
                   <div class="owl-item active" style="width: 196px; margin-right: 24px;">
                      <div class="company-logos">
                         <img :src="asset('assets/img/company-logo-02.svg')" alt="Company Logo">
                      </div>
                   </div>
                </div>
             </div>
             <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-chevron-right"></i></button></div>
             <div class="owl-dots disabled"></div>
          </div>
       </div>
    </section>
 </template>
<script setup>
import { asset } from '@/composables/global';

</script>

