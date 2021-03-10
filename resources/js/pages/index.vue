<template>
    <transition name="fade" mode="out-in">
        <router-view/>
    </transition>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    computed: mapGetters({
        title: 'page/title',
        subtitle: 'page/subtitle'
    })
}
</script>
