<template>
    <div>
        <p>{{ quote }}</p>
    </div>
</template>
<script>
    export default {
        name: 'Quote',
        data: function(){
            return {
                quote: "this is a quote"
            }
        },
        methods: {
            getQuote: function(){
                console.log('the button works');
                let ajax = new XMLHttpRequest;
                let quoteObj = this;
                ajax.onreadystatechange = function(){
                    if(ajax.status == 200 && ajax.readyState == 4){
                        let response = JSON.parse(this.responseText);
                        console.log(response);
                        quoteObj.quote = response.quote;
                        console.log(quoteObj.quote);
                    }
                }
                ajax.open('GET', '/quote', true);
                ajax.send();

            }
        },
        mounted: function(){
            this.$root.$on('updateQuote', this.getQuote);
        }
    }
</script>

<style lang="scss" scoped>

</style>
