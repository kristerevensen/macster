require('./bootstrap');


window.Vue= require('vue');
window.File = new Vue();

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import Vue from 'vue';

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

Vue.component('role', require('./components/role.vue').default);



// ES6 Modules or TypeScript
import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  window.Toast = Toast;

  import Form from 'vform'
  const errors = Form.errors

  import {
    Button,
    HasError,
    AlertError,
    AlertErrors,
    AlertSuccess
  } from 'vform/src/components/bootstrap5'
   //'vform/src/components/bootstrap4'
  // 'vform/src/components/tailwind'
  
  Vue.component(Button.name, Button)
  Vue.component(HasError.name, HasError)
  Vue.component(AlertError.name, AlertError)
  Vue.component(AlertErrors.name, AlertErrors)
  Vue.component(AlertSuccess.name, AlertSuccess)
  
  window.Form = Form;

  Vue.component(HasError.name, HasError)
  Vue.component(AlertError.name, AlertError)

  const app = new Vue({
    el : '#app'
});