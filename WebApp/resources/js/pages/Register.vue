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
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="last_name"
                            name="last_name"
                            class="form-control"
                            v-model="formData.last_name"
                            placeholder="Last Name"
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="username"
                            name="username"
                            class="form-control"
                            v-model="formData.username"
                            placeholder="User Name"
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            v-model="formData.email"
                            placeholder="Email Address"
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="phone"
                            name="phone"
                            class="form-control"
                            v-model="formData.phone"
                            placeholder="Phone"
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            v-model="formData.password"
                            placeholder="Password"
                        />
                    </div>
                    <div class="form-row">
                        <input
                            type="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            v-model="formData.password_confirmation"
                            placeholder="Confirm Password"
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
        handleRegister() {
            axios({
                method: 'post',
                url: 'api/register',
                data: this.formData
            })
        },
    },
};
</script>

<style lang="scss"></style>
