require('./bootstrap');

window.Vue = require('vue');

Vue.component(
    'home',
    require('./components/Home.vue')
);

Vue.component(
    'navbar',
    require('./components/Navbar.vue')
);


const app = new Vue({
    el: '#app'
});