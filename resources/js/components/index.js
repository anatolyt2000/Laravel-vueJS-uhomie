import Vue from 'vue'
import Card from './Card'
import Child from './Child'
import Button from './Button'
// import Checkbox from './Checkbox'
// import { HasError, AlertError, AlertErrors, AlertSuccess } from 'vform'

// Components that are registered globaly.
[
    Card,
    Child,
    Button
].forEach(Component => {
    Vue.component(Component.name, Component)
})
