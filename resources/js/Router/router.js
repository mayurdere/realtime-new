import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'

//Defining Routes
const routes = [
    { path: '/login', component: Login }
  ]

  // 3. Create the router instance and pass the `routes` option
const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history'
  })


  export default router