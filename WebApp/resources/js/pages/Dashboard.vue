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
            <input type="text" placeholder="Book Name" v-model="formData.title">
            <input type="text" placeholder="Book Image" v-model="formData.book_image">
            <input type="text" placeholder="Book Publisher" v-model="formData.publisher">
            <input type="text" placeholder="Book Author" v-model="formData.author">
            <input type="text" placeholder="ISBN" v-model="formData.isbn">
            <input type="text" placeholder="Price" v-model="formData.price">
            <input type="number" placeholder="Starting Stock amount INT" v-model="formData.stock">
            <button v-on:click="submitNewBook">Execute</button>
          </form>
          <p> {{ testicle }} </p>

          <form action="#">
            <label for="bookid"></label>
            <input type="bookid" name="bookid" placeholder="Book ID" v-model="bookID">
            <button v-on:click="deleteBook">Execute</button>
          </form>
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
    formData: {
      title: '',
      book_image: '',
      publisher: '',
      author: '',
      isbn: '',
      price: '',
      stock: ''
    },
    test: 0,
    message: '',
    testicle: '',
    bookID: '',
  }
},
mounted() {
  setInterval(() => {
    this.test++
  }, 1000)
},
methods: {
  getQueryUsers() {
    axios.get('api/pull').then(response => { this.message = response.data })
  },
  submitNewBook() {
    axios.post('api/newBook', this.formData).then( this.testicle = 'book posted to database' )
  },
  deleteBook() {
    axios.delete('api/deleteBook', this.bookID)
  }
}
};
</script>

<style scoped>
</style>
