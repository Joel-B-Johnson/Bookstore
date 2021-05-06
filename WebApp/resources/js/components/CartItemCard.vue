<template>
    <div class="cart-item-card">
        <div class="header">
            <h3>{{ book.title }}</h3>
            <h4>In Cart: {{ book.quantity }}</h4>
            <h4>Total Cost: {{ item-cost.toFixed(2) }}</h4>
        </div>
        
    </div>
</template>

<script>
export default {
    props: ['book'],
    computed: {
        
        item_cost(){
            return this.book.price * this.book.quantity
        }
    }
};
</script>

<style lang="scss"></style>