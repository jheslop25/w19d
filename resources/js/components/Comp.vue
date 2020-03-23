<template>
    <div class="card">
        <p class="h4">The Computer Counters with: {{ move }}</p>
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
                //let compMove = this;
                axios.get('/playrps')
                .then(response =>{
                    console.log(response.data.move + 'hello');
                    this.move = response.data.move;
                    this.$root.$emit('rockLobster', this.move);
                });
            },
            pushPaper: function(){
                console.log('this is paper pusher');
                axios.get('/playrps')
                .then(response =>{
                    console.log(response.data.move + 'hello');
                    this.move = response.data.move;
                    this.$root.$emit('dunderMiflin', this.move);
                });
            },
            thatCuts: function(){
                console.log('edward scissor hands');
                axios.get('/playrps')
                .then(response =>{
                    console.log(response.data.move + 'hello');
                    this.move = response.data.move;
                    this.$root.$emit('cutCutCUT', this.move);
                });
            }
        },
        data: function(){
            return {
                move: ''
            }
        }
    }
    //listen for player move, then make ajax request for move,
    // then pass moves to score component
</script>

<style lang="scss" scoped>

</style>
