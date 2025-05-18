<script setup lang="ts">
const props = defineProps<{
    label: string;
}>();

const slots = defineSlots<{
    link: () => VNode;
}>();
</script>

<template>
    <div class="flex flex-col gap-1.5">
        <div class="flex items-end justify-between">
            <label
                class="text-sm text-neutral-950 font-medium tracking-tight"
                >{{ label }}</label
            >
            <slot name="link" />
        </div>
        <input
            class="text-sm text-neutral-950 border border-neutral-300 rounded-lg px-4 py-3 placeholder:text-neutral-500"
            v-bind="$attrs"
        />
    </div>
</template>
