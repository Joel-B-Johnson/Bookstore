<template>
  <div id="container">
    <head>
      <title>Rickizon | Dashboard</title>
    </head>
    <div id="body">
      <h1>dashboard</h1>
      <p id="app"> Dashboard Uptime: {{ test }} </p>
      <hr>
        <div>
          <p> Retrieve Users on Record: </p>
          <p> {{message}} </p>
          <button v-on:click="getQueryUsers">Execute</button>
        </div>
        <br><hr>
        <div>
          <form action="#">
            <p>Add a new book to the database</p>
            <input type="text" placeholder="Book Name" id="formData.bname">
            <input type="text" placeholder="Book Image" id="formData.ImageLink">
            <input type="text" placeholder="Book Publisher" id="formData.bpublisher">
            <input type="text" placeholder="Book Author" id="formData.bauthor">
            <input type="text" placeholder="ISBN" id="formData.bISBN">
            <input type="text" placeholder="Price" id="formData.bPrice">
            <input type="number" placeholder="Starting Stock amount INT" id="formData.bSSA">
            <button v-on:click="submitNewBook">Execute</button>
          </form>
          <p> {{ testicle }} </p>
        </div>
        <br><hr>
    </div>
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
export default {
data() {
  return {
    test: 0,
    message: '',
    testicle: ''
  }
},
mounted() {
  setInterval(() => {
    this.test++
  }, 1000)
},
methods: {
  getQueryUsers() {
    axios.get('/pull').then(response => { this.message = response.data })
  },
  submitNewBook() {
    axios.post('/newBook', this.formData).then( this.testicle = 'book posted to database' )
  }
}
};
</script>

<style scoped>
</style>
