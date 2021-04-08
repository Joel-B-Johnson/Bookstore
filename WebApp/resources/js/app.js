require('./bootstrap')
import { createApp } from 'vue'
import App from './App.vue'

import router from './router/index.js'
import PrimeVue from 'primevue/config'

import Dialog from 'primevue/dialog'

import 'primevue/resources/themes/saga-blue/theme.css'       //theme
import 'primevue/resources/primevue.min.css'                 //core css
import 'primeicons/primeicons.css'                           //icons

const app = createApp(App)
app.use(router)
app.use(PrimeVue)

app.component('Dialog', Dialog)

// Mounts Vue to welcome.blade.php File
app.mount('#app')