<template>
    <div id="nav">
        <h1 class="logo">Logo</h1>
        <ul class="nav">
            <li class="navlink"><router-link to="/">Home</router-link></li>
            <li class="navlink"><router-link to="/admin">Admin</router-link></li>
            <li class="navlink"><router-link to="/login">Login</router-link></li>
        </ul>
        <div class="burger">
            <i class="fas fa-bars"></i>
        </div>
        <router-view />
    </div>
</template>

<script>
export default {
    name: "Navbar",
};

</script>

<style scoped>
#nav {
    margin: 0;
    padding: 0;
}
.nav {
    display: flex;
    justify-content: space-around;
    width: 30%;
}

.nav li {
    list-style: none;
    margin: 0;
}
</style>