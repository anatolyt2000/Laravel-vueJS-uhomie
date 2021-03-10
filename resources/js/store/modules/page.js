import * as types from '../mutation-types'

// state
export const state = {
    title: '',
    subtitle: '',
    keyword: '',
    sort: '',
};

// getters
export const getters = {
    title: state => state.title,
    subtitle: state => state.subtitle,
    keywork: state => state.keywork,
    sort: state => state.sort
};

// mutations
export const mutations = {
    [types.SET_TITLE] (state, { title }) {
        state.title = title
    },
    [types.SET_SUBTITLE] (state, { subtitle }) {
        state.subtitle = subtitle
    },
    [types.SET_KEYWORD] (state, { keyword }) {
        state.keyword = keyword
    },
    [types.SET_SORT] (state, { sort }) {
        state.sort = sort
    }
};

// actions
export const actions = {
    setTitle ({ commit }, { title }) {
        commit(types.SET_TITLE, { title })
    },
    setSubtitle ({ commit }, { subtitle }) {
        commit(types.SET_SUBTITLE, { subtitle })
    },
    setKeyword ({ commit }, { keyword }) {
        commit(types.SET_KEYWORD, { keyword })
    },
    setSort ({ commit }, { sort }) {
        commit(types.SET_SORT, { sort })
    }
};
