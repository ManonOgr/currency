import { createApp } from 'vue'
import App from './App.vue'
import axios from 'axios'

import router from './routers'

axios.defaults.baseURL = "http://localhost:8000/"

createApp(App).use(router).mount('#app')
