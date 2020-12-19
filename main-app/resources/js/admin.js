require('./bootstrap');

// Font Awesome
require('@fortawesome/fontawesome-free/js/all');

window.Vue = require('vue');


const app = new Vue({
    el: '#app',
    mounted() {
        let sidebarToggler = document.getElementById('sidebar-toggler');
        sidebarToggler.addEventListener('click', function (event) {
            console.log(event.target);
        });
    }
});
