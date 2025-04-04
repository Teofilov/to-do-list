<template>
    <div class="container text-center">
        <h1 class="mt-5">Welcome to Vue 3 with Bootstrap 5!</h1>
        <b-button variant="primary">Click me!</b-button>
    </div>
</template>

<script>
import { BButton } from "bootstrap-vue-next";

export default {
    components: { BButton, },
    name: 'App',
};
</script>

<style scoped>
/* Add any custom styles here */
</style>