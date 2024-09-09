
import { createApp } from 'vue'
import App from './App.vue'
// Vuetify
import vuetify from './plugins/vuetify'
import "@mdi/font/css/materialdesignicons.css";
// Components
import router from './router'
const app = createApp(App)

app.use(router)

app.use(vuetify)

app.mount('#app')
