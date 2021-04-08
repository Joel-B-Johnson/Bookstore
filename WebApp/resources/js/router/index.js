import { createWebHistory, createRouter } from "vue-router"
import Home from '../pages/Home.vue'
import Admin from '../pages/Admin.vue'
import Login from '../pages/Login.vue'
import Dashboard from '../pages/Dashboard.vue'
import Register from '../pages/Register.vue'
import Cart from '../pages/Cart.vue'

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
    path: '/admin',
    name: 'Admin',
    component: Admin,
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
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;