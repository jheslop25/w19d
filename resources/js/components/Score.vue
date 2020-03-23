<template>
    <div>
        <p>this is the score: {{ playerScore }} {{ compScore }}</p>
    </div>
</template>

<script>
    export default {
        name: 'Score',
        data: function(){
            return {
                playerScore: 'Player Score: 0',
                compScore: 'Computer Score: 0'
            }
        },
        mounted: function(){
            this.$root.$on('rockLobster', this.rockTheWorld);
            this.$root.$on('dunderMiflin', this.prisonMike);
            this.$root.$on('cutCutCUT', this.trimTheHedges);
        },
        methods: {
            rockTheWorld: function(compMove){
                console.log('this is the rock' + compMove);
            },
            prisonMike: function(compMove){
                console.log("i dont think that was offensive was it?"+ compMove);
            },
            trimTheHedges: function(compMove){
                console.log("I am an uncommonly gentle man"+ compMove);
            },
            theBrain: function(player, comp){
                if(player == 'rock' && comp == 'scissors'){
                    console.log('player wins');
                }else if(player == 'rock' && comp == 'paper'){
                    console.log('comp wins');
                }else if(player == 'rock' && comp == 'rock'){
                    console.log('this was a draw');
                }else if(player == 'paper' && comp == 'scissors'){
                    console.log('comp wins');
                }else if(player == 'paper' && comp == 'rock'){
                    console.log('player wins');
                }else if(player == 'paper' && comp == 'paper'){
                    console.log('this was a draw');
                }else if(player == 'scissors' && comp == 'rock'){
                    console.log('comp wins');
                }else if(player == 'scissors' && comp == 'paper'){
                    console.log('player wins');
                }else if(player == 'scissors' && comp == 'scissors'){
                    console.log('this was a draw');
                }
            }
        }
    }
    //add even listeners for moves from the player and comp then compare those moves and determine winner
</script>



<style lang="scss" scoped>

</style>
