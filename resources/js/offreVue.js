windows.Vue = require('offreVue');

Vue.component('ad', require('./components/offreComponent.vue').default);

const app = new Vue({
    el: '#app'
});