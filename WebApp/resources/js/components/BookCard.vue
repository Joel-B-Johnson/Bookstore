<template>
    <div class="card">
        <span>{{ book.title }}</span>
        <h5>Author: {{ book.author }} </h5>
        <h5>Publisher: {{ book.publisher }} </h5>
        <h5>ISBN: {{ book.isbn }}</h5>
        <h5 class="price">Price: ${{ book.price.toFixed(2) }}</h5>
        <h5>Stock: {{ book.stock }}</h5>
        <div class="cart-total">
            <h5 class="inCart">In Cart</h5>
            <h5 class="inCartTotal">{{ bookTotal }}</h5>
        </div>
        <div class="button-container">
            <button v-on:click="bookTotal--" class="remove">Remove</button>
            <button v-on:click="bookTotal++" class="add">Add</button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['book'],
    data() {
        return{
            bookTotal: 0,
        };
    },
    computed: {
        removeCart: function (event) {
            var cart =  localStorage.getItem("cart");
            var newCart = cart.replace(this.book.id, '');
        },
        addToCart: function (event) {
            var cart =  localStorage.getItem("cart");
            cart += ("  " + this.book.id + "  ");
            localStorage.setItem("cart", cart);
        },
        book_total() {
            var cart = localStorage.getItem("cart");
            var myBook = this.book.id;
            var re = new RegExp(myBook, 'g');
            let count = (cart.match(re) || []).length;
            return count;
        },
    },
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

    .button-container {
        button {
            color: white;
            width: 100px;
            border:none;
            padding: 10px;
            border-radius: 5px;
            margin: 5px  5px 5px 5px;
            cursor: pointer;
            justify-content: center;
            align-items: center;
            background-color: #00a4ef;
        }
    }

    .cart-total {
        h5.inCart {
            text-align: center;
            font-weight: bold;
        }
        h5.inCartTotal {
            text-align: center;
        }
    }
}

@media (min-width: 500px) {
    .card {
        width: 350px;
        margin: 10px;
    }
}
</style>