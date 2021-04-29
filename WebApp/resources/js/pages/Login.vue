<template>
    <head>
        <title>Rickizon | Login</title>
    </head>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleLogin">
                    <h1>Log in Here</h1>
                    <div id="loginError">Username/Password Incorrect</div>
                    <div class="form-row">
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            v-model="formData.email"
                            placeholder="Email Address"
                            required
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            v-model="formData.password"
                            placeholder="Password"
                            required
                        />
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary btn-blok">
                            Log In
                        </button>
                        <router-link
                            tag="button"
                            class="btn btn-primary btn-blok"
                            to="/register"
                            >Register</router-link
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "login",
    data() {
        return {
            formData: {
                email: "",
                password: "",
            },
            userData: {
                first_name: "",
                last_name: "",
                username: "",
                email: "",
                phone: "",
                admin: "",
                token: "",
            },
        };
    },
    methods: {
        handleLogin() {
            // send axios request
            axios
                .post("api/login", this.formData)
                .then((response) => {
                    //set if the thing works
                    console.log(response);
                    this.userData.first_name = response.data.user.first_name;
                    this.userData.last_name = response.data.user.last_name;
                    this.userData.username = response.data.user.username;
                    this.userData.email = response.data.user.email;
                    this.userData.phone = response.data.user.phone;
                    this.userData.admin = response.data.user.admin;
                    this.userData.token = response.data.token;
                    console.log(this.userData);
                    document.getElementById("loginError").style.display ="none";
                    document.getElementById("logOut").style.display="block";
                    document.getElementById("login").style.display="none";
                    this.$router.push("/");
                })
                .catch(function (error) {
                    if (error.response) {
                        document.getElementById("loginError").style.display ="block";
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.headers);
                    } else if (error.request) {
                        console.log(error.request);
                    } else {
                        console.log("Error", error.message);
                    }
                });
        },
    },
};
</script>

<style>
h1 {
    text-transform: Uppercase;
    text-align: center;
}
#loginError {
    display: none;
    font-size: 25px;
    text-align: center;
    color: red;
    weight: bold;
}
.form-row {
    margin-bottom: 8px;
}
.btn-primary {
    background-color: #00a4ef;
}

.btn-primary:hover {
    background-color: #00a4ef;
}

.btn-blok {
    display: inline-block;
    overflow: auto;
    white-space: nowrap;
    margin: 0px auto;
}
</style>
