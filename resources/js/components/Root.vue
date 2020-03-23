<template>
    <div class="container">
        <p>rock paper scissors</p>
        <Score />
        <Player />
        <Comp />
    </div>
</template>

<script>
import Score from './Score.vue'
import Player from './Player.vue'
import Comp from './Comp.vue'

    export default {
        mounted() {
            console.log('Component mounted.');
        },
        name: 'Root',
        components : {
            Score,
            Player,
            Comp
        }
    }
</script>
