// // //
// // // // /**
// // // //  * First we will load all of this project's JavaScript dependencies which
// // // //  * includes Vue and other libraries. It is a great starting point when
// // // //  * building robust, powerful web applications using Vue and Laravel.
// // // //  */
// // //
require('./bootstrap');

import Vue from "vue";

// console.log(Vue);
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';

import axios from 'axios';
// console.log(axios)
import User from "./components/UserComponents"
import Product from "./components/ProductComponent.vue"
Vue.use(VueRouter);
Vue.use(VueAxios,axios);

let r = new VueRouter({
    routes: [
        {path: "/admin/product", component: Product},
        {path: "/admin/user", component: User},
    ],
    mode:"history"
})
let v = new Vue({
    router:r,
    el: '#app',
});

// //
// //
// // window.Vue = require('vue');
// // //
// // // /**
// // //  * Next, we will create a fresh Vue application instance and attach it to
// // //  * the page. Then, you may begin adding components to this application
// // //  * or customize the JavaScript scaffolding to fit your unique needs.
// // //  */
// // // //
// // Vue.component('example-component', require('./components/ExampleComponent.vue'));
// // //
// // const app = new Vue({
// //     el: '#app'
// // });
