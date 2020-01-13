
require('./bootstrap');


window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import VueScrollReveal from 'vue-scroll-reveal';
import Vuex from 'vuex';
import store from "./store/index";
import "../css/global.css";

Vue.use(VueScrollReveal);
Vue.use(Vuex)
Vue.use(BootstrapVue);


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//Root Component
Vue.component('root-component', require('./components/RootComponent').default);


const app = new Vue({
    el: '#app',
    store,
});
