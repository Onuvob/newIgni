
require('./bootstrap');


window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.use(BootstrapVue);


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Landing Component
Vue.component('example-component', require('./components/landing/ExampleComponent.vue').default);
Vue.component('landing-home', require('./components/landing/LandingHome.vue').default);
Vue.component('landing-home-component', require('./components/landing/LandingHomeComponent.vue').default);
Vue.component('navigation-component', require('./components/landing/navigation/NavigationComponent.vue').default);

// Landing Igni About Component
Vue.component('landing-about-component', require('./components/landing/about/IgniAboutComponent').default);

//Landing Services Component
Vue.component('service-component', require('./components/landing/services/ServiceContainerComponent.vue').default);
// Vue.component('game-component', require('./components/landing/services/GameDevComponent.vue').default);
// Vue.component('visualization-component', require('./components/landing/services/3DVisualizationComponent.vue').default);
// Vue.component('web-component', require('./components/landing/services/WebDevComponent.vue').default);
// Vue.component('app-component', require('./components/landing/services/AppDevComponent.vue').default);

//Landing Core Team Component
Vue.component('core-team-component', require('./components/landing/coreteam/CoreTeamComponent.vue').default);


//Landing Contact Component
Vue.component('contact-component', require('./components/landing/contact/ContactComponent.vue').default);

//Footer
Vue.component('footer-component', require('./components/FooterComponent').default);


//Root Component
// Vue.component('root-component', require('./components/RootComponent').default);


const app = new Vue({
    el: '#app',
});
