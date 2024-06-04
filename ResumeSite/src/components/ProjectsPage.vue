<style scoped>

.huge-title {
  font-size: 12em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.card-title {
  font-size: 3ex; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.sub-title {
  font-size: 2ex; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.blurb{
  text-align: center;
}
</style>

<script>
  export default {
    data: () => ({
    }),

    methods: {
      onScreenResize() {
        window.addEventListener("resize", () => {
          this.updateScreenWidth();
          this.isSmallWindow = window.innerWidth <= 768;
        });
      },

      updateScreenWidth() {
        this.screenWidth = window.innerWidth;
      },
    },

    mounted() {
      this.updateScreenWidth();
      this.onScreenResize();
    },
  }

  
</script>
<template>

  <h1 class="huge-title">Projects.</h1>

  <v-row>
      <v-col cols="3"></v-col>
      <v-col
          class="mb-5"
          cols="6"
          center
        >
        <v-card
          color = "#D7D2CB"
          class="rounded-card"
          max-width="900"
          height="680"
        >
        <div class ="float-center">
          <v-img
              :aspect-ratio="20/6"
              src="/src/assets/uafs.png"
              max-width="600"
              cover
            >
          </v-img>
        </div>
        <div class="text-left">
            <div class="sub-title">Bachelor of Science - Computer Science - Minor in Mathematics</div>

            <v-card-text class="text--primary">
              <br>
              <v-progress-linear
                color="green"
                height="15"
                model-value="86.69"
                striped
                rounded
              ></v-progress-linear>
            </v-card-text>
          </div>
        </v-card>
      </v-col>
      <v-col cols="3"></v-col>
    </v-row>


</template>
