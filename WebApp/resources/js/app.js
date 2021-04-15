require('./bootstrap')
import { createApp } from 'vue'
import App from './App.vue'

import router from './router/index.js'

const app = createApp(App)
app.use(router)


// Mounts Vue to welcome.blade.php File
app.mount('#app')