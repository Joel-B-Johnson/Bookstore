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
      let books = axios.get('api/books');
      console.log(books.data);
    }
  },
  beforeMount() {
    let beks = axios.get('api/books');
    this.books = beks;
    console.log(this.books);
  },
}
</script>

<style lang="scss">
.home {
  width: 100%;
}
</style>
