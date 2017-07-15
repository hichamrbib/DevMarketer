
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);

// Vue.component('example', require('./components/Example.vue'));


//dropdown hover toggle 
$(document).ready(function() {
  //  Dropdowns
  $('.dropdown').hover(function(e) {
    $(this).toggleClass('is-open')
  })
})

