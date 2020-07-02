/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
//作成したrouter.jsファイルをインポート
import router from './router'

// window.Vue = require('vue');
window.Vue = Vue;
Vue.use(VueRouter);



// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);


//Vueインスタンスにrouterを追加
const app = new Vue({
    el: '#app',
    router
});
