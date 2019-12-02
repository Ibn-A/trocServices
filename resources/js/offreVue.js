windows.Vue = require('offreVue');

Vue.component('offre', require('./components/offreComponent.vue').default);

const app = new Vue({
    el: '#app'
});