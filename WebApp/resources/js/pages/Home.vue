<template>
  <head>
    <title>Rickizon | Home</title>
  </head>
  <div v-if="showBooks">
    <ul>
      <li v-for=" book in books" :key="book.title">
        {{ img }}
        <h3>{{ book.title }}</h3>
        <p>{{ book.author }}</p>
      </li>
    </ul>
  </div>

  <button @click="toggleShowBooks">
    <span v-if="showBooks">Hide Books</span>
    <span v-else>Show Books</span>
  </button>
</template>

<script>
export default {
  data() {
    return {
      showBooks: true,
      books: [
        {
          title: "name of the wind",
          auhtor: "patrick rothfuss",
          img: "./../assets/1.jpg",
          isFav: true,
        },
        {
          title: "the way of kings",
          auhtor: "brandon sanderson",
          img: "./../assets/2.jpg",
          isFav: false,
        },
        {
          title: "name of the wind",
          auhtor: "patrick rothfuss",
          img: "./../assets/3.jpg",
          isFav: true,
        },
      ],
    };
  },
  methods: {
    toggleShowBooks() {
      this.showBooks = !this.showBooks;
    },
  },
};
</script>

<style scoped>
.box {
  padding: 100px 0;
  width: 400px;
  text-align: center;
  background: #ddd;
  margin: 20px;
  display: inline-block;
}
</style>
