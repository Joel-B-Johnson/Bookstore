<template>
    <head>
        <title>Rickizon | Home</title>
    </head>
    <div class="book-container">
      <BookCard
        v-for="book in books"
        :key="book.id"
        :book="book"
      />
    </div>
    <div class="home">
      <img src='../../assets/homeBack.jpg' alt="rick">
    </div>
</template>

<script>
import BookCard from "../components/BookCard.vue";
export default {
  data() {
    return {
      books: "",
    }
  },
  components: {
    BookCard,
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

.book-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
</style>
