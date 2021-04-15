<template>
    <head>
        <title>Rickizon | Login</title>
    </head>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6 offset-3">
              <form action="#" @submit.prevent="handleLogin">
                <h1>Log in Here</h1>
                <div class="form-row">
                  <input type="email" name="email" class="form-control" v-model="formData.email" placeholder="Email Address">
                </div>
                <div class="form-row">
                  <input type="password" name="password" class="form-control" v-model="formData.password" placeholder="Password">
                </div>
                <div class="form-row">
                  <button type="submit" class="btn btn-primary">Log In</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data ()  {
      return {
        formData: {
          email: '',
          password: ''
        }
      }
    },
    components: {

    },
    methods: {
      handleLogin() {
        // send axios request
        axios.get('/sanctum/csrf-cookie').then(response => {
          axios.post('/login', this.formData).then(response => {
            console.log(response)
          })
        })
      }
    },
};
</script>

<style>
  h1 {
    text-transform: Uppercase;
    text-align: center;
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
</style>
