
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let Myheader = require('./components/Myheader.vue').default;
let Myfooter = require('./components/Myfooter.vue').default;

let Home = require('./components/Home.vue').default;
let About = require('./components/About.vue').default;

//define routes
const routes = [
    { path: '/home', component: Home },
    { path: '/about', component: About }
  ]

//Create the router instance and pass the `routes` option
  const router = new VueRouter({
    //mode:'history',
    routes // short for `routes: routes`
  })
  
  
// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
const app = new Vue({
    el: '#app',
    router,
    components:{Myheader,Myfooter}
});
