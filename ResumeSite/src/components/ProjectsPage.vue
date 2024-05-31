<style scoped>

.huge-title {
  font-size: 5em; 
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
      cards: [
        { title: 'Test', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', flex: 12 },
        { title: 'Favorite road trips', src: 'https://preview.redd.it/yhbuz0i1o0b91.png?width=640&crop=smart&auto=webp&s=e33d7eee161139adfe8cbcc74cf8116113e539a8', flex: 6 },
        { title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 6 },
        { title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 10 },
        { title: 'Best airlines', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 2 },
      ],
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

  <v-card
    class="mx-auto"
    max-width="1000"
  >
    <v-container fluid>
      <v-row dense>
        <v-col
          v-for="card in cards"
          :key="card.title"
          :cols="card.flex"
        >
          <v-card>
            <v-img
              :src="card.src"
              class="align-end"
              gradient="to bottom, rgba(0,0,0,.4), rgba(0,0,0,.8)"
              height="200px"
              cover
            >
              <v-card-title class="text-white" v-text="card.title"></v-card-title>
            </v-img>

            <v-card-actions>
              <v-spacer></v-spacer>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-card> 
</template>
