<template>
    <div class="card m-3 p-3">
        <p class="h4">This is the score: Player: {{ playerScore }} Computer: {{ compScore }}</p>
    </div>
</template>

<script>
    export default {
        name: 'Score',
        data: function(){
            return {
                playerScore: 0,
                compScore: 0,
                source: "https://cdn.vox-cdn.com/thumbor/2x9_1fkAr5Lh-IP_nWqStNfaz_g=/1400x1400/filters:format(png)/cdn.vox-cdn.com/uploads/chorus_asset/file/16283328/Screen_Shot_2019_05_17_at_11.48.34_AM.png"
            }
        },
        mounted: function(){
            this.$root.$on('rockLobster', this.rockTheWorld);
            this.$root.$on('dunderMiflin', this.prisonMike);
            this.$root.$on('cutCutCUT', this.trimTheHedges);
        },
        methods: {
            rockTheWorld: function(compMove){
                let player = 'rock';
                let result = this.theBrain(player, compMove);
                console.log(result);
            },
            prisonMike: function(compMove){
                let player = 'paper';
                let result = this.theBrain(player, compMove);
                console.log(result);
            },
            trimTheHedges: function(compMove){
                let player = 'scissors';
                let result = this.theBrain(player, compMove);
                console.log(result);
            },
            theBrain: function(player, comp){
                if(player == 'rock' && comp == 'scissors'){
                    console.log('player wins');
                    this.playerScore ++;
                }else if(player == 'rock' && comp == 'paper'){
                    console.log('comp wins');
                    this.compScore++;
                }else if(player == 'rock' && comp == 'rock'){
                    console.log('this was a draw');
                }else if(player == 'paper' && comp == 'scissors'){
                    console.log('comp wins');
                    this.compScore++;
                }else if(player == 'paper' && comp == 'rock'){
                    console.log('player wins');
                    this.playerScore ++;
                }else if(player == 'paper' && comp == 'paper'){
                    console.log('this was a draw');
                }else if(player == 'scissors' && comp == 'rock'){
                    console.log('comp wins');
                    this.compScore++;
                }else if(player == 'scissors' && comp == 'paper'){
                    console.log('player wins');
                    this.playerScore ++;
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
