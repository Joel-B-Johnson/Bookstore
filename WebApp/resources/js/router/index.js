import { createWebHistory, createRouter } from "vue-router";
import Home from '../components/Home.vue';
 
const routes = [ 
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/',
    name: 'Dashboard',
    component: Dashboard
  },
];
 
const router = createRouter({
  history: createWebHistory(),
  routes,
});
 
export default router;