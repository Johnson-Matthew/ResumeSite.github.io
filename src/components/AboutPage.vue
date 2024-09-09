<style scoped>

.huge-title {
  font-size: 12em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}
</style>
<template>

  <h1 class="huge-title">About Me.</h1>
  <v-row>
  <v-col cols="3"></v-col>
  <v-col cols=6>
    <v-carousel show-arrows="hover">
      <v-carousel-item
        src="/src/assets/headshot.png"
        cover
      ></v-carousel-item>

      <v-carousel-item
        src="/src/assets/rebel.jpg"
        cover
      ></v-carousel-item>

      <v-carousel-item
        src="/src/assets/chopper.jpg"
        cover
      ></v-carousel-item>

      <v-carousel-item
        src="/src/assets/IMG_1180.jpg"
        cover
      ></v-carousel-item>
    </v-carousel>
  </v-col>
  </v-row>

</template>