import store from '~/store'

export default (to, from, next) => {
    if (store.getters['auth/user'].role_names && store.getters['auth/user'].role_names.indexOf('admin') == -1) {
        next({ name: 'dashboard' })
    } else {
        next()
    }
}
