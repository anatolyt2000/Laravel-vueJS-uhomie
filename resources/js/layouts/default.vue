<template>
    <!-- <div class="layout-wrapper main-layout" :class="{'sidebar-collapsed': collapsed}"> -->
    <div class="layout-wrapper main-layout">
        <!-- <Sidebar /> -->
        <div class="page-content-wrapper">
            <Navbar/>
            <div class="container py-3">
                <child/>
            </div>
        </div>
    </div>
</template>

<script>
// import Sidebar from '~/components/Sidebar'
import Navbar from '~/components/Navbar'
// import { mapGetters } from 'vuex'

export default {
    name: 'MainLayout',

    components: {
        // Sidebar,
        Navbar
    },
    // computed: mapGetters({
    //     collapsed: 'sidebar/collapsed'
    // })
}
</script>
