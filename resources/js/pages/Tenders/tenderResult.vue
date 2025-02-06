<template>
    <div class="content content-page mt-5">
        <div class="container" style="transform: none">
            <div class="row" style="transform: none">
                <LeftSideSearch />
                <TenderResultList />
            </div>
        </div>
    </div>
</template>

<script setup>
import { provide, ref } from "vue";
import LeftSideSearch from "./components/leftsidefilter.vue";
import TenderResultList from "./components/resultList.vue";
const results=ref([])
provide('tenders',{results})
</script>
