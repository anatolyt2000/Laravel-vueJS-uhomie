import * as types from '../mutation-types'

// state
export const state = {
    collapsed: false
}

// getters
export const getters = {
    collapsed: state => state.collapsed
}

// mutations
export const mutations = {
    [types.TOGGLE] (state) {
        state.collapsed = !state.collapsed
    }
}

// actions
export const actions = {
    toggle ({ commit }) {
        commit(types.TOGGLE)
    }
}
