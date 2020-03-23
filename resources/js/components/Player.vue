<template>
  <div class="card">
    <p class="h4">Choose Your Move!</p>
    <div class="row justify-content-around px-2">
        <img class="img-fluid col-4 size rounded" :src="getImg(2)" alt />
        <img class="img-fluid col-4 size rounded" :src="getImg(1)" alt />
        <img class="img-fluid col-4 size rounded" :src="getImg(3)" alt />
    </div>
    <div class="row mx-2">
      <button class="btn btn-primary m-3 col" @click="chooseRock">Rock</button>
      <button class="btn btn-primary m-3 col" @click="choosePaper">Paper</button>
      <button class="btn btn-primary m-3 col" @click="chooseScissors">Scissors</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Player",
  methods: {
    choosePaper: function() {
      console.log("paper");
      this.$root.$emit("paper");
    },
    chooseRock: function() {
      console.log("rock");
      this.$root.$emit("rock");
    },
    chooseScissors: function() {
      console.log("scissors");
      this.$root.$emit("scissors");
    },
    getImg: function(index){
        console.log('get image');
        return this.src[index];
    }
  },
  data: function(){
      return {
          src: [
              "https://cdn.vox-cdn.com/thumbor/2x9_1fkAr5Lh-IP_nWqStNfaz_g=/1400x1400/filters:format(png)/cdn.vox-cdn.com/uploads/chorus_asset/file/16283328/Screen_Shot_2019_05_17_at_11.48.34_AM.png",
              "https://i.pinimg.com/474x/e1/4e/1a/e14e1a0f98487abaa4ae02e5d86e10a3.jpg",
              "https://img1.looper.com/img/gallery/who-the-rocks-social-media-diss-was-really-targeted-at/intro-1568654220.jpg",
                "https://i.pinimg.com/originals/1e/4e/a6/1e4ea697dcdff0f8b827db689001b8e8.jpg"
          ]
      }
  }
};
//add methods that respond to player clicking move button,
//then pass player move to comp
//
</script>

<style lang="scss" scoped>
.size {
    height: 300px;
}
</style>
