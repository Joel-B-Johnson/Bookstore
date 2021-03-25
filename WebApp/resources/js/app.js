require('./bootstrap');
import {createApp} from 'vue'
import router from './routes/index'
import Home from './components/Home'

// window.Vue = require('vue');

createApp(Home).use(router).mount('#app')