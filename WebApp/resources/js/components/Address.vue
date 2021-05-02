<template>
    <ul class="infoList">
        <li>{{address_1}}</li>
        <li>{{address_2}}</li>
        <li>{{zipcode}}</li>
        <li>{{city}}</li>
        <li>{{state_id}}</li>

    </ul>
</template>

<script>
export default {
    name: "UserInfo",
    data() {
        return {
            address_1: "",
            address_2: "",
            zipcode: "",
            city: "",
            state_id: "",
        };
    },
    methods:{
        displayAddresses() { 
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
        this.displayAddresses()
    },
};
</script>

<style lang="scss">
    .infoList {
        list-style-type: none;
    }
</style>
