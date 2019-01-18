import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import Signup from '../components/login/Signup'

//Defining Routes
const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: Signup },
  ]

  // 3. Create the router instance and pass the `routes` option
const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false, //to hide the # from url
    mode : 'history' //to hide the # from url
  })


  export default router