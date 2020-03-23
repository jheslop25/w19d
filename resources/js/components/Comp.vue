<template>
    <div>
        <p>this is the computer player</p>
    </div>
</template>

<script>
    export default {
        name: "Comp",
        mounted: function(){
            this.$root.$on('rock', this.rockOn);
            this.$root.$on('paper', this.pushPaper);
            this.$root.$on('scissors', this.thatCuts);
        },
        methods : {
            ajaxCall: function(){
                axios.get('/playrps')
                .then(response =>{
                    console.log(response.data.move);
                    return response.data.move;
                })
            },
            rockOn: function(){
                console.log('this is the rock on function');
                let compMove = axios.get('/playrps')
                .then(response =>{
                    console.log(response.data.move);
                    return response.data.move;
                });
                console.log(compMove);
                this.$root.$emit('rockLobster', this.ajaxCall());
            },
            pushPaper: function(){
                console.log('this is paper pusher');
                let compMove = this.ajaxCall();
                this.$root.$emit('dunderMiflin', compMove);
            },
            thatCuts: function(){
                console.log('edward scissor hands');
                let compMove = this.ajaxCall();
                this.$root.$emit('cutCutCUT', compMove);
            }
        }
    }
    //listen for player move, then make ajax request for move,
    // then pass moves to score component
</script>

<style lang="scss" scoped>

</style>
