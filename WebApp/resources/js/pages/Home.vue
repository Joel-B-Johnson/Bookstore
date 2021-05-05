<template>
    <head>
        <title>Rickizon | Home</title>
    </head>
    <div class="book-container">
      <img id="backgroundrick" src='../../assets/homeBack.jpg' alt="rick">
      <BookCard
        v-for="book in books"
        :key="book.id"
        :book="book"
      />
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
