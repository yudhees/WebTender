<template>
    <div class="resize-sensor"
        style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
        <div class="resize-sensor-expand"
            style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
            <div style="position: absolute; left: 0px; top: 0px; transition: all; width: 340px; height: 971px;"></div>
        </div>
        <div class="resize-sensor-shrink"
            style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-8">
        <div class="page-title">
            <h3>Search Result</h3>
        </div>

        <div class="proposals-section ongoing-projects row listResult">
           <TendersRender/>
        </div>
    </div>
</template>
<script setup>
import TendersRender from './TendersRender.vue';
</script>
