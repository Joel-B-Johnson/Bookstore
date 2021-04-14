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
        return {};
    },
};
</script>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "montserrat", sans-serif;
    background-color: #828282;
}
</style>
