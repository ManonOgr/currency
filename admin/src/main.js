import { createApp } from 'vue'
import App from './App.vue'
import axios from 'axios'

import router from './routers'

axios.defaults.baseURL = "http://localhost:8000/"

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
  components,
  directives,
})

createApp(App).use(vuetify).use(router).mount('#app')