<template>
    <div>
        <head>
            <title>Rickizon | Account</title>
        </head>
        <div class="container">
            <p> {{ thisMessage }} </p>
        </div>
    </div>
</template>

<script>
import Login from "./Login.vue";
export default {
    name: 'Account',
    data() {
        return {
            thisMessage: "",
        };
    },
    methods:{
        displayUserInfo() {
            let user = Login.userData;
            this.thisMessage = user;
            console.log(Login.userData)
        },
    },
    beforeMount(){
        this.displayUserInfo()
    },
}
</script>

<style>

</style>