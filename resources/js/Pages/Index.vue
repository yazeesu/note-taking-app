<script setup lang="ts">
import { computed, ref } from "vue";

const counter = ref<number>(0);
const name = ref<string>("John");

const fullName = computed(() => {
    return name.value + " Doe";
});
</script>

<template>
    <h2 class="text-red-500">{{ fullName }}</h2>
    <h1>Counter : {{ counter }}</h1>
    <button @click="counter++">Increment</button>
</template>
