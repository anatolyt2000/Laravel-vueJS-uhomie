<template>
    <div class="loading-wrapper">
        <div :style="{
            width: `${percent}%`,
            height: height,
            opacity: show ? 1 : 0,
            'background-color': canSuccess ? color : failedColor
        }" class="progress"/>
        <div class="spinner-wrapper d-flex justify-content-center align-items-center" v-if="showSpinner">
            <div class="spinner-border text-light">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</template>

<script>
// https://github.com/nuxt/nuxt.js/blob/master/lib/app/components/nuxt-loading.vue
export default {
    data: () => ({
        percent: 0,
        show: false,
        showSpinner: false,
        canSuccess: true,
        duration: 3000,
        height: '2px',
        color: '#77b6ff',
        failedColor: 'red'
    }),

    methods: {
        start (spinner) {
            this.show = true
            this.canSuccess = true
            if (this._timer) {
                clearInterval(this._timer)
                this.percent = 0
            }
            this._cut = 10000 / Math.floor(this.duration)
            this._timer = setInterval(() => {
                this.increase(this._cut * Math.random())
                if (this.percent > 95) {
                    this.finish()
                }
            }, 100)
            return this
        },
        startSpinner() {
            this.showSpinner = true
        },
        set (num) {
            this.show = true
            this.canSuccess = true
            this.percent = Math.floor(num)
            return this
        },
        get () {
            return Math.floor(this.percent)
        },
        increase (num) {
            this.percent = this.percent + Math.floor(num)
            return this
        },
        decrease (num) {
            this.percent = this.percent - Math.floor(num)
            return this
        },
        finish () {
            this.percent = 100
            this.hide()
            return this
        },
        pause () {
            clearInterval(this._timer)
            return this
        },
        hide () {
            clearInterval(this._timer)
            this._timer = null
            setTimeout(() => {
                this.show = false
                this.showSpinner = false
                this.$nextTick(() => {
                    setTimeout(() => {
                        this.percent = 0
                    }, 200)
                })
            }, 50)
            return this
        },
        fail () {
            this.canSuccess = false
            return this
        }
    }
}
</script>

<style lang="scss" scoped>
.loading-wrapper {
    .progress {
        position: fixed;
        top: 0px;
        left: 0px;
        right: 0px;
        height: 2px;
        width: 0%;
        transition: width 0.2s, opacity 0.4s;
        opacity: 1;
        background-color: #efc14e;
        z-index: 999999;
    }

    .spinner-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 999999;
    }
}
</style>
