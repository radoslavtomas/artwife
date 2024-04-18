<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <div class="invalid-feedback">{{ message }}</div>
    </div>
</template>
