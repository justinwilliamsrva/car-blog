import './bootstrap';
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.use(VueRouter);
const app = new Vue({
  el: '#app',
});