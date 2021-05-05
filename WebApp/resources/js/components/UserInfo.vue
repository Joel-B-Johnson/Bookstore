<template>
    <div class="container">
        <h1>User Information</h1>
        <ul class="infoList">
            <li>
                <label class="userInfoForm" for="first_name">{{first}}</label>
                <input
                    type="first_name"
                    name="first_name"
                    v-model="formData.first_name"
                    placeholder="first"
                    required
                />
            </li>
            <li>
                <label class="userInfoForm" for="last_name">{{last}}</label>
                <input
                    type="last_name"
                    name="last_name"
                    v-model="formData.last_name"
                    placeholder="last"
                    required
                />
            </li>
            <li>
                <label class="userInfoForm" for="username">{{username}}</label>
                <input
                    type="username"
                    name="username"

                    v-model="formData.username"
                    placeholder="username"
                    required
                />
            </li>
            <li>
                <label class="userInfoForm" for="email">{{email}}</label>
                <input
                    type="email"
                    name="email"
                    v-model="formData.email"
                    placeholder="email"
                    required
                />
            </li>
            <li>
                <label class="userInfoForm" for="phone">{{phone}}</label>
                <input
                    type="phone"
                    name="phone"
                    v-model="formData.phone"
                    placeholder="phone"
                    required
                />
            </li>
            <li id="userIsAdmin">
                <label for="admin">Administrator</label>
            </li>
            <li class="form-row">
                        <button class="btn btn-primary btn-blok" type="submit" name="submit" value="Submit">Submit</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "UserInfo",
    data() {
        return {
            first: localStorage.getItem("first_name"),
            last: localStorage.getItem("last_name"),
            username:  localStorage.getItem("username"),
            email: localStorage.getItem("email"),
            phone: localStorage.getItem("phone"),
            admin: false,
            formData: {
                first_name: "",
                last_name: "",
                username: "",
                email: "",
                phone: "",
            },
        };
    },
};
</script>

<style lang="scss">
    .infoList {
        list-style-type: none;
    }
    #userIsAdmin {
        display: none;
    }
    .userInfoForm {
        padding-right: 30px;
    }
</style>
