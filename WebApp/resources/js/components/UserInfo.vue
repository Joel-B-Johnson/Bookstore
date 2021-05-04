<template>
    <div class="container">
        <h1>User Information</h1>
        <ul class="infoList">
            <li>{{first}}</li>
            <li>{{last}}</li>
            <li>{{username}}</li>
            <li>{{email}}</li>
            <li>{{phone}}</li>
            <li>{{admin}}</li>
            <li>{{token}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "UserInfo",
    data() {
        return {
            first: "",
            last: "",
            username: "",
            email: "",
            phone: "",
            admin: "",
            token: "",
        };
    },
    methods:{
        displayUserInfo() { 
            this.first = localStorage.getItem("first_name");
            this.last = localStorage.getItem("last_name");
            this.username = localStorage.getItem("username");
            this.email = localStorage.getItem("email");
            this.phone = localStorage.getItem("phone");
            this.admin = localStorage.getItem("admin");
            this.token = localStorage.getItem("token");
        },
    },
    beforeMount(){
        this.displayUserInfo()
    },
};
</script>

<style lang="scss">
    .infoList {
        list-style-type: none;
    }
</style>
