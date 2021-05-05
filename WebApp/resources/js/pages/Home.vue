<template>
    <head>
        <title>Rickizon | Home</title>
    </head>
    <div class="book-container">
      <img id="backgroundrick" src='../../assets/homeBack.jpg' alt="rick">
      <BookCard
        class="cardSpace"
        v-for="book in books"
        :key="book.id"
        :book="book"
        v-on:buy-book="buyBook($event)"
      />
    </div>
</template>

<script>
import BookCard from "../components/BookCard.vue";
export default {
  data() {
    return {
      books: "",
      book: null,
    }
  },
  components: {
    BookCard,
  },
  methods: {
    buyBook(book) {
      this.book = book;
      
    }
  },
  beforeMount() {
      axios.get('api/books')
      .then(response => { this.books = response.data })
  },
}
</script>

<style lang="scss">
#backgroundrick {
  width: 100%;
  position:absolute;
}

.book-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
</style>
