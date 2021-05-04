<template>
    <div>
        <head>
            <title>Rickizon | Account</title>
        </head>
        <div class="sidenav">
            <ul class="accountNav">
                <li><button @click="userInfo = !userInfo">User</button></li>
                <li><button @click="address = !address">Addresses</button></li>
            </ul>
        </div>
        <div class="mainVue">
            <UserInfo v-if="userInfo" />
            <Address v-if="address" />
        </div>
    </div>
</template>

<script>
import UserInfo from "../components/UserInfo.vue"
import Address from "../components/Address.vue"
export default {
    name: 'Account',
    components: {
        UserInfo,
        Address,
    },
    data() {
        return {
            userInfo: true,
            address: false,
            payment: false,
        };
    },
    methods:{
        displayUserInfo() {
            console.log("hello world")
        },
    },
    beforeMount(){
        this.displayUserInfo()
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