<template>
    <div class="card" :class="cardClass">
        <div v-if="title" class="card-header d-flex align-items-center">
            {{ title }}
            <slot name="labels"></slot>
        </div>

        <div class="card-body">
            <slot/>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Card',

    props: {
        title: { type: String, default: null },
        cardClass: { type: String, default: '' }
    }
}
</script>
