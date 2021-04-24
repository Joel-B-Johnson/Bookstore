import { createWebHistory, createRouter } from "vue-router"
import Home from '../pages/Home.vue'
import Account from '../pages/Account.vue'
import Login from '../pages/Login.vue'
import Dashboard from '../pages/Dashboard.vue'
import Register from '../pages/Register.vue'
import Cart from '../pages/Cart.vue'
import Orders from '../pages/Orders.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/shoppingcart',
    name: 'Cart',
    component: Cart,
  },
  {
    path: '/account',
    name: 'Account',
    component: Account,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
  },
  {
    path: '/register',
    name: 'Register',
    component: Register,
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard
  },
  {
    path: '/orders',
    name: 'Orders',
    component: Orders
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;