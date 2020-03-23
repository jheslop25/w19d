<template>
    <div><button @click="fireKanye">click for quote</button></div>
</template>
<script>
export default {
    name: 'Button',
    methods :{
        fireKanye : function() {
            this.$root.$emit('updateQuote');
        }
    }
}
</script>
<style lang="stylus" scoped>

</style>
