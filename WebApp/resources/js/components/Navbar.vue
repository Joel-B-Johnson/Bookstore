<template>
    <div class="navig">
        <img src="../../assets/navRick.jpg" alt="ricky" class="logo" />
        <nav>
            <li><router-link class="lie" to="/">Home</router-link></li>
            <li><router-link class="lie" to="/dashboard">Dashboard</router-link></li>
            <li><router-link class="lie" to="/shoppingcart">Cart</router-link></li>
            <li><router-link class="lie" to="/login">Login</router-link></li>
            <li><router-link class="lie" to="/register">Register</router-link></li>
        </nav>
    </div>
</template>

<script>
export default {
    name: "navbar",
    components: {},
};
</script>

<style lang="scss">
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
    border-style: outset;
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
