<template>
    <div class="card">
        <h3>{{ book.title }}</h3>
        <h5>Author: {{ book.author }} </h5>
        <h5>Publisher: {{ book.publisher }} </h5>
        <h5>ISBN: {{ book.isbn }}</h5>
        <h5 class="price">Price: ${{ book.price.toFixed(2) }}</h5>
        <h5>Stock: {{ book.stock }}</h5>
        <button class="view-book-button"></button>

 
    </div>
</template>

<script>
export default {
    props: ['book'],
    computed: {

    }

}
</script>

<style lang="scss">
</style>