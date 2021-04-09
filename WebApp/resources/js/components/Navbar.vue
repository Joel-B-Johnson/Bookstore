<template>
  <nav>
    <div class="menu-item"><router-link id="item" to="/">Home</router-link></div>
    <div class="menu-item"><router-link id="item" to="/login">Login</router-link></div>
    <div class="menu-item"><router-link id="item" to="/register">Register</router-link></div>
    <div class="menu-item"><router-link id="item" to="/dashboard">Dashboard</router-link></div>
  </nav>
</template>

<script>
export default {
  name: "navbar",
  components: {},
};
</script>

<style scoped>
nav {
  width: 100vw;
  background-color: #222;
  padding: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
}

nav .menu-item {
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  border-bottom: 3px solid transparent;
  display: flex;
  transition: 0.4s;
}

nav .menu-item.active,
nav .menu-item:hover {
    background-color: #444;
    border-bottom-color: #FF5858;
}

nav .menu-item #item{
  color: inherit;
  text-decoration: none;
}
</style>
