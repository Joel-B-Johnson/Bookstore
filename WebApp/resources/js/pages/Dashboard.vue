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
        <div>
            <p>Add a new book to the database</p>
            <input type="text" placeholder="Book Name" v-model="formData.bname">
            <input type="text" placeholder="Book Image" v-model="formData.ImageLink">
            <input type="text" placeholder="Book Publisher" v-model="formData.bpublisher">
            <input type="text" placeholder="Book Author" v-model="formData.bauthor">
            <input type="text" placeholder="ISBN" v-model="formData.bISBN">
            <input type="text" placeholder="Price" v-model="formData.bPrice">
            <input type="number" placeholder="Starting Stock amount (INT)" v-model="formData.bSSA">
            <button v-on:click="submitNewBook">Execute</button>
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
  },
  submitNewBook() {
    axios.post('/newBook', this.formData).then(response => { console.log(response) })
  }
}
};
</script>

<style scoped>
</style>
