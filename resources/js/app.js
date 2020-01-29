require('./bootstrap');
import Vue from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import AnotherComponent from './components/AnotherComponent.vue';

window.Vue = Vue;

Vue.component('example-component', ExampleComponent);
Vue.component('another-component', AnotherComponent);

const app = new Vue({
    el: '#app',
    components: {
        'example-component': ExampleComponent,
        'another-component': AnotherComponent,        
    }

});