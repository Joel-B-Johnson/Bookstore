<template>
    <div class="card">
        <span>{{ book.title }}</span>
        <h5>Author: {{ book.author }} </h5>
        <h5>Publisher: {{ book.publisher }} </h5>
        <h5>ISBN: {{ book.isbn }}</h5>
        <h5 class="price">Price: ${{ book.price.toFixed(2) }}</h5>
        <h5>Stock: {{ book.stock }}</h5>
        <button class="btn btn-primary btn-blok" @click="$emit('buy-book', book)">Add to Cart</button>

 
    </div>
</template>

<script>
export default {
    props: ['book'],
}
</script>

<style lang="scss">
.card span {
    font-weight: bold;
    font-size: 1.5em;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 30ch;
}
.card {
    width: 80%;
    margin: 10%;
    padding: 10px;
    border-radius: 5px;
    background-color: white;
    box-shadow: 0 0 5px gray;

    h5.price {
        color: gray;
    }
}

@media (min-width: 500px) {
    .card {
        width: 350px;
        margin: 10px;
    }
}
</style>