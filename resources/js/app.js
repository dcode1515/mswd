/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Allrecords', require('./components/Allrecords.vue').default);
Vue.component('Profileadd', require('./components/Profileadd.vue').default);
Vue.component('Editprofile', require('./components/Editprofile.vue').default);
Vue.component('Archived', require('./components/Archived.vue').default);
Vue.component('Register', require('./components/Register.vue').default);
Vue.component('Britania', require('./components/Britania.vue').default);
Vue.component('Buatong', require('./components/Buatong.vue').default);
Vue.component('Gata', require('./components/Gata.vue').default);
Vue.component('Hornasan', require('./components/Hornasan.vue').default);
Vue.component('Janipaan', require('./components/Janipaan.vue').default);
Vue.component('Kauswagan', require('./components/Kauswagan.vue').default);
Vue.component('Otieza', require('./components/Otieza.vue').default);
Vue.component('Poblacion', require('./components/Poblacion.vue').default);
Vue.component('Pungtod', require('./components/Pungtod.vue').default);
Vue.component('Pongon', require('./components/Pongon.vue').default);
Vue.component('Salvacion', require('./components/Salvacion.vue').default);
Vue.component('Is', require('./components/Is.vue').default);
Vue.component('Os', require('./components/Os.vue').default);
Vue.component('Buhisan', require('./components/Buhisan.vue').default);
Vue.component('Viewprofile', require('./components/Viewprofile.vue').default);
Vue.component('Santonino', require('./components/Santonino.vue').default);
Vue.component('Is', require('./components/Is.vue').default);
Vue.component('Category1', require('./components/Category1.vue').default);
Vue.component('Category2', require('./components/Category2.vue').default);
Vue.component('Category3', require('./components/Category3.vue').default);
Vue.component('Category4', require('./components/Category4.vue').default);
Vue.component('Createprofile', require('./components/Createprofile.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
