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
                  <input type="first_name" name="first_name" class="form-control" v-model="formData.first_name" placeholder="First Name">
                </div>
                <div class="form-row">
                  <input type="last_name" name="last_name" class="form-control" v-model="formData.last_name" placeholder="Last Name">
                </div>
                <div class="form-row">
                  <input type="username" name="username" class="form-control" v-model="formData.username" placeholder="User Name">
                </div>
                <div class="form-row">
                  <input type="email" name="email" class="form-control" v-model="formData.email" placeholder="Email Address">
                </div>
                <div class="form-row">
                  <input type="password" name="password" class="form-control" v-model="formData.password" placeholder="Password">
                </div>
                <div class="form-row">
<<<<<<< HEAD
                  <input type="confirmation" name="confirmation" class="form-control" v-model="formData.confirmation" placeholder="Password Confirmation">
                </div>
                <div class="form-row">
                  <button type="submit" class="btn btn-primary">Submit</button>
=======
                  <input type="password_confirmation" name="password_confirmation" class="form-control" v-model="formData.password_confirmation" placeholder="Password">
                </div>
                <div class="form-row">
                  <button type="submit" class="btn btn-primary btn-blok">Log In</button>
                  <router-link tag="button" class="btn btn-primary btn-blok" to="/register">Register</router-link>
>>>>>>> 50b88dbf2b572902171fe1b343e60025852b2acb
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
          first_name: '',
          last_name: '',
          username: '',
          email: '',
          password: '',
          password_confirmation: '',
          admin: 0,
          deleated: 0,
        }
    }
  },
  methods: {
    handleRegister() {
      axios.post('/register', this.formData).then(response => {
<<<<<<< HEAD
            console.log(response)
          })
      },
=======
          console.log(response)
        })
        this.formData.first_name = ''
        this.formData.last_name = ''
        this.formData.username = ''
        this.formData.email = ''
        this.formData.password = ''
        this.formData.password_confirmation = ''
>>>>>>> 50b88dbf2b572902171fe1b343e60025852b2acb
  },
}
}
</script>

<style lang="scss">

</style>