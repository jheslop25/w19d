<template>
  <div>
    <p>this is the player</p>
    <button class="btn btn-primary m-3" @click="chooseRock">Rock</button>
    <button class="btn btn-primary m-3" @click="choosePaper">Paper</button>
    <button class="btn btn-primary m-3" @click="chooseScissors">Scissors</button>
  </div>
</template>

<script>
export default {
  name: "Player",
  methods: {
    choosePaper: function() {
      console.log("paper");
      this.$root.$emit('paper');
    },
    chooseRock: function() {
      console.log("rock");
        this.$root.$emit('rock');
    },
    chooseScissors: function() {
      console.log("scissors");
      this.$root.$emit('scissors');
    }
  }
};
//add methods that respond to player clicking move button,
//then pass player move to comp
//
</script>

<style lang="scss" scoped>
</style>