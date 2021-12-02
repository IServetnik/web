require('./time');
require('./ratings');

window.Vue = require('vue').default;


Vue.component('employees-component', require('./components/EmployeesComponent.vue').default);


const app = new Vue({
    el: '#app',
});
