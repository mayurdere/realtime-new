import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import Logout from '../components/login/Logout'
import Signup from '../components/login/Signup'
import Forum from '../components/forum/Forum'

//Defining Routes
const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout },
    { path: '/signup', component: Signup },
    { path: '/forum', component: Forum, name: 'forum'},
  ]

  // 3. Create the router instance and pass the `routes` option
const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false, //to hide the # from url
    mode : 'history' //to hide the # from url
  })


  export default router