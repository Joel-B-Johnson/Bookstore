<template>
    <div class="navig">
        <img src="../../assets/navRick.jpg" alt="ricky" class="logo" />
        <nav>
            <li><router-link class="lie" to="/">Home</router-link></li>
            <li id="admin"><router-link class="lie" to="/dashboard">Dashboard</router-link></li>
            <li id="orders"><router-link class="lie" to="/orders">Orders</router-link></li>
            <li id="shopping"><router-link class="lie" to="/shoppingcart">Cart</router-link></li>
            <li id="accounts"><router-link class="lie" to="/account">Account</router-link></li>
            <li id="login"><router-link class="lie" to="/login">Login</router-link></li>
            <li id="logOut"><button v-on:click="logout" class="btn btn-primary">Log out</button></li>
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
        this.$router.push("/");
        localStorage.setItem("first_name", "");
        localStorage.setItem("last_name", "");
        localStorage.setItem("admin", "");
        localStorage.setItem("username", "");
        localStorage.setItem("email", "");
        localStorage.setItem("token", "");
        localStorage.setItem("phone", "");
        document.getElementById("logOut").style.display="none";
        document.getElementById("login").style.display="inline-block";
        document.getElementById("accounts").style.display="none";
        document.getElementById("shopping").style.display="none";
        document.getElementById("admin").style.display="none";
      },
    },
    
};
</script>

<style lang="scss">
#logOut {
    display: none;
}

#login {
  display: inline-block;
}
#shopping {
  display: none;
}
#admin {
  display: none;
}
#orders {
  display: none;
}
#accounts {
  display: none;
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
