import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import Logout from '../components/login/Logout'
import Signup from '../components/login/Signup'
import Forum from '../components/forum/Forum'
import Read from '../components/forum/read'
import Create from '../components/forum/create'

//Defining Routes
const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout },
    { path: '/signup', component: Signup },
    { path: '/forum', component: Forum, name: 'forum'},
    { path: '/ask', component: Create, name: 'create'},
    { path: '/question/:slug', component: Read, name: 'read'},
  ]

  // 3. Create the router instance and pass the `routes` option
const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false, //to hide the # from url
    mode : 'history' //to hide the # from url
  })


  export default router