<template>
    <template v-if="results.length">
       <TenderCard v-for="tender in results" :key="tender.id" :data="tender" />
    </template>
    <template v-else>
        <div class="text-center my-3">
            No Results Found
        </div>
    </template>
</template>
<script setup>
import { inject } from 'vue';
import TenderCard from './TenderCard.vue';
const {results}=inject('tenders')
</script>
