window._ = require('lodash');
window.axios = require('axios');
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common = {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
};
window.Vue = require('vue').default;

import Snotify, { SnotifyPosition } from 'vue-snotify'
const options = {
  toast: {
    position: SnotifyPosition.rightTop,
    timeout: 3000,
    // showProgressBar: true,
    // closeOnClick: false,
    pauseOnHover: true
  }
}

Vue.use(Snotify, options)

Vue.component('weather-component', require('./components/WeatherComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
