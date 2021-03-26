require('./bootstrap');
import {createApp} from 'vue'
import Home from './components/views/Home.vue'
import router from './router/index.js'


createApp(Home).use(router).mount('#app')