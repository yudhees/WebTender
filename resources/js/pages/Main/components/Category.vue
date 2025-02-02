<template>
    <section class="section browse-categories" style="background: #fff;box-shadow: rgba(0, 0, 0, .08) 0 10px 40px 10px;">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-12 mx-auto">
            <div class="section-header section-header-four section-locate aos aos-init aos-animate" data-aos="fade-up">
               <div class="text-center">
                  <h2 class="about-contents" style="font-size: 40px;">Browse Procurement By Category </h2>
                  <p>Explore the Latest Government Procurement Categories on World Wide Tender.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="browse-categories-content">
         <div class="row row-gap aos aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories1.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Development &amp; IT</h5>
                     <a href="javascript:void(0);">958 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories7.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Design &amp; Creative</h5>
                     <a href="javascript:void(0);">515 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2000">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories3.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Digital Marketing</h5>
                     <a href="javascript:void(0);">486 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2500">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories4.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Writing &amp; Translation</h5>
                     <a href="javascript:void(0);">956 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories5.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Music &amp; Video</h5>
                     <a href="javascript:void(0);">662 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories6.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Video &amp; Animation</h5>
                     <a href="javascript:void(0);">226 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2000">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories7.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Engineering &amp; Architecture</h5>
                     <a href="javascript:void(0);">756 Skills</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 aos aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2500">
               <div class="popular-catergories">
                  <div class="popular-catergories-img">
                     <span><img :src="asset('assets/img/icon/categories8.svg')" alt="img"></span>
                  </div>
                  <div class="popular-catergories-content">
                     <h5>Finance &amp; Accounting</h5>
                     <a href="javascript:void(0);">958 Skills</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="home-four-viewall">
         <a href="project.html" class="home-four-viewall-btn">View all Categories</a>
      </div>
   </div>
</section>
</template>
<script setup>
import { asset } from '@/composables/global';
</script>
