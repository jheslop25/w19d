<template>
    <div class="container">
        <p class="h3">Welcome to DWAYNE, MIKE, and EDWARD!</p>
        <p>The classic game with a hollywood twist!</p>
        <Score />
        <Comp />
        <Player />
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
