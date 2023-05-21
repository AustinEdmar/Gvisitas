instalei o 

1- jwt, 
2 - vue router, 
3 - vuex,

4 - vee-validate: importei files de configs em /plugins/vee-validate.js
5 - axios: importei files de configs em /plugins/axios.js

6 - tailwindcss: 
https://www.codingthesmartway.com/how-to-use-tailwind-css-with-vue-and-vite/
import './style.css' chamei no main

2 - main.js

import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './style.css'
import '@/plugins/vee-validate'
import '@/plugins/axios'