<template>
  <div id="container">
    <head>
      <title>Rickizon | Dashboard</title>
    </head>
    <div id="body">
      <h1>dashboard</h1>
      <form action="#" @submit.prevent="handleQuery"> 
            <input type="text" id="query" v-model="formData.message" placeholder="enter SQL query" />
            <button type="submit" class="btn-sql">Execute</button>
      </form>
    </div>
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
export default {
  
    data ()  {
      return {
        formData: {
          message: ''
        }
      }
    },
    components: {
      Navbar,
    },
    methods: {
      handleQuery() {
        axios.get('/pull').then(response => {
         console.log(response.data)
        })
      }
    },
};
</script>

<style scoped>
</style>
