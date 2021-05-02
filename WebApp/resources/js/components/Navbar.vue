<template>
    <div class="navig">
        <img src="../../assets/navRick.jpg" alt="ricky" class="logo" />
        <nav>
            <li><router-link class="lie" to="/">Home</router-link></li>
            <li><router-link class="lie" to="/dashboard">Dashboard</router-link></li>
            <li><router-link class="lie" to="/orders">Orders</router-link></li>
            <li><router-link class="lie" to="/shoppingcart">Cart</router-link></li>
            <li><router-link class="lie" to="/account">Account</router-link></li>
            <li><router-link id="login" class="lie" to="/login">Login</router-link></li>
            <li><button v-on:click="logout" id="logOut" class="btn btn-primary">Log out</button></li>
        </nav>
    </div>
</template>

<script>
import App from "../App.vue";
export default {
    name: "navbar",
    components: {},
    methods: {
      logout() {
        axios.post('api/logout')
        .then((response) => {
            console.log(response)
            this.$router.push("/");
            localStorage.setItem("", response.data.user.first_name);
            localStorage.setItem("", response.data.user.last_name);
            localStorage.setItem("", response.data.user.username);
            localStorage.setItem("", response.data.user.email);
            localStorage.setItem("", response.data.user.phone);
            localStorage.setItem("", response.data.user.admin);
            localStorage.setItem("", response.data.user.token);
            document.getElementById("logOut").style.display="none";
            document.getElementById("login").style.display="block";
        })
      }
    }
};
</script>

<style lang="scss">
#logOut {
    display: none;
}

#login {
  display: block;
}
.navig {
    width: 100vw;
    background-color: #222;
    padding: 15px;
    position: relative;
}

.navig::after {
    content: '';
    display: table;
    clear: both;
}

.navig .logo {
    float: left;
    width: 50px;
    border: 2px solid #00a4ef;
}

.navig nav {
  float: right;
}

.navig nav ul {
  margin: 100px;
  padding: 10px;
  list-style: none;
}

.navig nav li {
  display: inline-block;
  margin-right: 70px;
  padding-top: 13px;
  position: relative;
}

.lie {
  font-size: 20px;
  color: #FFF;
  text-decoration: none;
  text-transform: uppercase;
}

.navig .lie:hover{
  text-decoration: none;
  color: #FFF;
}

.navig .lie::before {
  content: '';
  display: block;
  height: 5px;
  width: 100%;
  background-color: #00a4ef;

  position: absolute;
  top: 11px;
  width: 0%;
  transition: all ease-in-out 400ms;
}


.lie:hover::before {
  width:100%;
}

</style>
