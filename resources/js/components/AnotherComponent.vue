<template>
    <div class="component">
        <p>I'm another component - this text is from js/Components/AnotherComponent.vue </p>
        <p>I have this data: {{ someVariable }} </p>        
    </div>
</template>

<script>
export default {

    data () {
        return {
            someVariable: 'testing variable data',

        }
        
    },
}
</script>

<style scoped>
.component {
    background-color: aqua;
    padding: 10px;
    border-radius: 20pt;
}
</style>