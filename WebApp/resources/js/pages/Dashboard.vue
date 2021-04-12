<template>
  <div id="container">
    <head>
      <title>Rickizon | Dashboard</title>
    </head>
    <div id="body">
      <h1>This is the dashboard</h1>
      <form action="ambassador.php" method="post"> 
            <input id="query" v-model="message" placeholder="enter SQL query" />
            <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</template>

<script>
// import '../sass/dashboard.scss'
//  export default {
//   name: 'Dashboard',
//   components: {

//   }
</script>

<style scoped>
</style>
