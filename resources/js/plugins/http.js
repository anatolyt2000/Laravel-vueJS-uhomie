import axios from 'axios'
import { endpoint } from '~/config/api'
import i18n from '~/plugins/i18n'
import Swal from 'sweetalert2'

/**
 * Create Axios
 */
export const http = axios.create({
    baseURL: endpoint
})

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
    http.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

/**
 * Handle all error messages.
 */
http.interceptors.response.use(response => response, error => {
    const { status } = error.response
    const { data } = error.response
    if (status >= 500) {
        Swal.fire({
            icon: 'error',
            title: i18n.t('error_alert_title'),
            text: i18n.t('error_alert_text'),
            reverseButtons: true,
            confirmButtonText: i18n.t('ok'),
            cancelButtonText: i18n.t('cancel')
        })
    }
    // if (status === 401 && store.getters['auth/check']) {
    else if (status === 401) {
        Swal.fire({
            icon: 'warning',
            title: i18n.t('token_expired_alert_title'),
            text: i18n.t('token_expired_alert_text'),
            reverseButtons: true,
            confirmButtonText: i18n.t('ok'),
            cancelButtonText: i18n.t('cancel')
        }).then(() => {
            // store.commit('auth/LOGOUT')
            // router.push({ name: 'login' })
            window.location = '/';
        })
    }
    // else if(data && data.messages) {
    //     swal({
    //         type: 'warning',
    //         title: 'Unauthorized',
    //         text: data.messages[0],
    //         reverseButtons: true,
    //         confirmButtonText: i18n.t('ok'),
    //         cancelButtonText: i18n.t('cancel')
    //     }).then(() => {
    //         // store.commit('auth/LOGOUT')
    //         // router.push({ name: 'login' })
    //         window.location = '/';
    //     })
    // }
    console.log(error);
    return Promise.reject(error)
})

export default function install (Vue) {
    Object.defineProperty(Vue.prototype, '$http', {
        get () {
            return http
        }
    })
}
