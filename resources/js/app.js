require('./bootstrap');

window.Vue = require('vue');
// import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import http from '~/plugins/http'
import App from '~/components/App'

import '~/components'
import '~/plugins/fontawesome'

Vue.use(http);

// Vue.config.productionTip = false

/* eslint-disable no-new */
Vue.component('examplecomponent', require('./components/ExampleComponent.vue').default);
new Vue({
    i18n,
   // store,
    router,
    ...App,
    
});



