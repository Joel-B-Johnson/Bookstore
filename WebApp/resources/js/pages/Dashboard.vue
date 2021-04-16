<template>
  <div id="container">
    <head>
      <title>Rickizon | Dashboard</title>
    </head>
    <div id="body">
      <h1>dashboard</h1>
      <p id="app"> Dashboard Uptime: {{ test }} </p>
        <div>
          <p> Retrieve Users on Record: </p>
          <p> {{message}} </p>
          <button v-on:click="getQueryUsers">Execute</button>
        </div>
      
    </div>
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
export default {
data() {
  return {
    test: 0,
    message: ''
  }
},
mounted() {
  setInterval(() => {
    this.test++
  }, 1000)
},
methods: {
  getQueryUsers() {
    this.message = axios.get('/pull')
  }
}
};
</script>

<style scoped>
</style>
