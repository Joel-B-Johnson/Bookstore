<template>
    <div>
        <head>
            <title>Rickizon | Account</title>
        </head>
        <div class="sidenav">
            <ul class="accountNav">
                <li><button @click="userInfo=true, address=false, payment=false">User</button></li>
                <li><button @click="userInfo=false, address=true, payment=false">Addresses</button></li>
                <li><button @click="userInfo=false, address=false, payment=true">Cards</button></li>
            </ul>
        </div>
        <div class="mainVue">
            <UserInfo v-if="userInfo" />
            <Address v-if="address" />
            <Payment v-if="payment" />
        </div>
    </div>
</template>

<script>
import UserInfo from "../components/UserInfo.vue"
import Address from "../components/Address.vue"
import Payment from "../components/Payment.vue"
export default {
    name: 'Account',
    components: {
        UserInfo,
        Address,
        Payment,
    },
    data() {
        return {
            userInfo: true,
            address: false,
            payment: false,
        };
    },
    methods:{
    },
}
</script>

<style>
.accountNav {
    list-style-type: none;
}
.accountNav button {
    color: white;
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    background-color: #00a4ef;
    font-size: 16px;
    float: right;
    width: 150px;
}
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 180px;
  background-color: #222; /* Black*/
  position: fixed;
  padding-top: 25px; /* Place content 60px from the top */
}
.mainVue {
    padding-left: 200px;
}
</style>