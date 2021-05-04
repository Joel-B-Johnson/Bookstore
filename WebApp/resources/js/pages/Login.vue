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
        };
    },
    methods: {
        handleLogin() {
            // send axios request
            axios
                .post("api/login", this.formData)
                .then((response) => {
                    console.log(response);
                    localStorage.setItem("first_name", response.data.user.first_name);
                    localStorage.setItem("last_name", response.data.user.last_name);
                    localStorage.setItem("username", response.data.user.username);
                    localStorage.setItem("email", response.data.user.email);
                    localStorage.setItem("phone", response.data.user.phone);
                    localStorage.setItem("admin", response.data.user.admin);
                    localStorage.setItem("token", response.data.token);
                    document.getElementById("loginError").style.display ="none";
                    document.getElementById("logOut").style.display="inline-block";
                    document.getElementById("login").style.display="none";
                    document.getElementById("accounts").style.display="inline-block";
                    document.getElementById("orders").style.display="inline-block";
                    document.getElementById("shopping").style.display="inline-block";
                    if ((localStorage.getItem("admin")) != 1) {
                        document.getElementById("admin").style.display="none";
                    } else {
                        document.getElementById("admin").style.display="inline-block";
                    }
                    this.$router.push("/");
                })
                .catch(function (error) {
                    if (error.response) {
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
