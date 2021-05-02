<template>
    <header>
        <Navbar />
    </header>
    <div id="app">
        <router-view />
    </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
export default {
    name: "app",
    components: {
        Navbar,
    },
    data() {
        return {
        };
    },
    methods: {

    },
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

</style>
