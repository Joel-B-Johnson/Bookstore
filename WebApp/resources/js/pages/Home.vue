<template>
    <head>
        <title>Rickizon | Home</title>
    </head>
    <div class="home">
      <img src='../../assets/homeBack.jpg' alt="rick">
    </div>
</template>

<script>
export default {
  data() {
    return {
      books: "",
    }
  },
  methods: {
    getAllBooks() {

    }
  },
  beforeMount() {
      axios.get('api/books')
      .then(response => { this.books = response.data })
  },
}
</script>

<style lang="scss">
.home img {
  width: 100%;
}
</style>
