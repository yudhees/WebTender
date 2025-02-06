<template>
    <div>
        <select class="form-control">
            <option value=''>{{ placeholder }}</option>
            <option v-for="option in options" :value="option.value">{{ option.label }}</option>
        </select>
    </div>
</template>
<script setup>
defineProps({
    options:{default:[]},
    placeholder:{default:''}
})
</script>
