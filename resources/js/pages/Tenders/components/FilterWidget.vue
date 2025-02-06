<template>
    <div class="filter-widget">
        <h4 class="filter-title">
            <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapselocation"
                aria-expanded="true" aria-controls="collapseOne">
                {{ heading }}
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
            </a>
        </h4>
        <div id="collapselocation" class="collapse show" data-bs-parent="#accordionExample1">
            <slot/>
        </div>
    </div>
</template>
<script setup>
defineProps(['heading'])
</script>
