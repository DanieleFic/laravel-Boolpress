window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import App from "./App.vue";


import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyABMLuSrPaDRD3EEmMW1j8mught728AqV0',
    libraries: 'places',
  }
});

// aggiungiamo l'import del file router.js
import router from "./router";

const app = new Vue({
    el: '#app',
    render: h => h(App),
		// aggiungiamo l'oggetto router all'istanza Vue
		router
});
