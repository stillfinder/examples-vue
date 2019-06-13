<template>
    <div class="h-screen w-screen fixed justify-center items-center flex z-50 top-0 left-0" style="background: rgba(0, 0, 0, 0.7);">
        <div class="cursor-pointer absolute w-full h-full" @click="$emit('close')"></div>
        <div class="relative max-w-xl bg-white rounded px-3 py-2 w-1/2 text-center">
            <slot></slot>
            <div class="absolute top-0 right-0 text-gray-500 pr-3 cursor-pointer text-2xl" @click="$emit('close')">&times;</div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>