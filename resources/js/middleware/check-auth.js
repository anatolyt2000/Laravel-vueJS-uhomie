import store from '~/store'

export default async (to, from, next) => {
    // if (!store.getters['auth/check'] && store.getters['auth/token']) {
    if (!store.getters['auth/check']) {
        try {
            await store.dispatch('auth/fetchUser')
        } catch (e) { }
    }

    next()
}
