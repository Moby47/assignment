require('./bootstrap');


window.Vue = require('vue');

import Vue from 'vue';

//vue router
import router from './router'

const app = new Vue({
    el: '#app',
    router
});
