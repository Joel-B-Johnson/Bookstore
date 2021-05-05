<template>
    <div class="card">
        <span>{{ book.title }}</span>
        <h5>Author: {{ book.author }} </h5>
        <h5>Publisher: {{ book.publisher }} </h5>
        <h5>ISBN: {{ book.isbn }}</h5>
        <h5 class="price">Price: ${{ book.price.toFixed(2) }}</h5>
        <h5>Stock: {{ book.stock }}</h5>
        <button class="btn btn-primary btn-blok">View</button>

 
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
.card span {
    font-weight: bold;
    font-size: 1.5em;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 30ch;
}
.card {
    padding: 20px 20px 20px 20px;
}
</style>