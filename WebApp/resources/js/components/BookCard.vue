<template>
    <div class="card">
        <h3>{{ book.title }}</h3>
        <h5>Author: ${{ book.author}}</h5>
        <h5 class="price">Price: ${{ book.price.toFixed(2) }}</h5>

 
    </div>
</template>

<script>
export default {
    props: ['book'],

}
</script>

<style lang="scss">
</style>