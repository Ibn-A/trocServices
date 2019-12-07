
window.Vue = require('vue');
Vue.component('offreService', require('./components/OffreComponent.vue').default);
const app = new Vue({
    el: '#app'
});