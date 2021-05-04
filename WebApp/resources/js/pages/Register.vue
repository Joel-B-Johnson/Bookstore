<template>
    <head>
        <title>Rickizon | Register</title>
    </head>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleRegister">
                    <h1>Register Here</h1>
                    <div class="form-row">
                        <input
                            type="first_name"
                            name="first_name"
                            class="form-control"
                            v-model="formData.first_name"
                            placeholder="First Name"
                            required
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="last_name"
                            name="last_name"
                            class="form-control"
                            v-model="formData.last_name"
                            placeholder="Last Name"
                            required
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="username"
                            name="username"
                            class="form-control"
                            v-model="formData.username"
                            placeholder="User Name"
                            required
                        />
                    </div>
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
                            type="phone"
                            name="phone"
                            class="form-control"
                            v-model="formData.phone"
                            placeholder="Phone"
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
                    <div id="passError">Passwords Do Not Match.</div>
                    <div class="form-row">
                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-control"
                            v-model="formData.password_confirmation"
                            placeholder="Confirm Password"
                            required
                        />
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary btn-blok">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import App from "../App.vue";
export default {
    data() {
        return {
            formData: {
                first_name: "",
                last_name: "",
                username: "",
                email: "",
                phone: "",
                password: "",
                password_confirmation: "",
                admin: 0,
                deleated: 0,
            },
        };
    },
    methods: {
        validate() {
            let thruth = true;
            if (this.formData.password != this.formData.password_confirmation) {
                documnet.getElementById("passError").style.display="block";
                thruth = false;
            }

        },
        handleRegister() {
            axios({ method: 'post', url: 'api/register', data: this.formData })
            .then((response) => {
                console.log(response);
                localStorage.setItem("first_name", response.data.user.first_name);
                localStorage.setItem("last_name", response.data.user.last_name);
                localStorage.setItem("username", response.data.user.username);
                localStorage.setItem("email", response.data.user.email);
                localStorage.setItem("phone", response.data.user.phone);
                localStorage.setItem("admin", response.data.user.admin);
                localStorage.setItem("token", response.data.token);
                document.getElementById("passError").style.display ="none";
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
                    document.getElementById("passError").style.display="block";
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

<style lang="scss">
#passError {
    display: none;
    font-size: 25px;
    text-align: center;
    color: red;
    weight: bold;
}
</style>
