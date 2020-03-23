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
            rockTheWorld: function(){
                console.log('this is the rock');
            },
            prisonMike: function(){
                console.log("i dont think that was offensive was it?");
            },
            trimTheHedges: function(){
                console.log("I am an uncommonly gentle man");
            },
            theBrain: function(player, comp){

            }
        }
    }
    //add even listeners for moves from the player and comp then compare those moves and determine winner
</script>



<style lang="scss" scoped>

</style>
