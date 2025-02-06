<template>
    <div>
        <input type="text" name="search" class="form-control" :placeholder v-model.lazy="input"
            v-debounce />
    </div>
</template>
<script setup>
defineProps({
    placeholder:{default:''}
})
const input=defineModel({default:''})
</script>
