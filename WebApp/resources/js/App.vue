<template>
  <div>
    <navbar></navbar>
  </div>
</template>

<script>
import navbar from "./components/Navbar.vue";
export default {
  name: "App",
  data() {
    return {};
  },
  components: {
    navbar,
  },
};
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
// html,
// body {
//   margin: 0;
//   padding: 0;
//   overflow-x: hidden;
// }

// body {
//   background-color: rgb(245, 245, 245);
// }

// #nav {
//   padding: 10px;
//   width: 100%;
//   height: 30px;
//   background-color: white;
//   line-height: 30px;

//   a {
//     font-weight: bold;
//     color: darkgray;
//     text-decoration: none;
//     margin: 0 5px 0 5px;
//     font-size: 1.25rem;

//     &.active {
//       color: #2c3e50;
//     }
//   }
// }

// .text-center {
//   text-align: center;
// }
</style>