import { createWebHistory, createRouter } from "vue-router"
import Home from '../pages/Home.vue'
import Admin from '../pages/Admin.vue'
import Login from '../pages/Login.vue'
import Dashboard from '../pages/Dashboard.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
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