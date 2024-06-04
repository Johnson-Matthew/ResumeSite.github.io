<script>
  export default {
    data: () => ({
      icons: [
        'mdi-facebook',
        'mdi-github',
        'mdi-linkedin',
        'mdi-instagram',
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

<style scoped>
.footer{
  position:absolute;
  bottom:0;
   width:100%;
   height:100px; 
  text-align: center;
}

.huge-title {
  font-size: 12em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.medium-title {
  font-size: 3em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.blurb{
  font-size: 2em; 
  text-align: center;
}
</style>
<template>

  <h1 class="huge-title">Hi, I'm Matt.</h1>
  <h2 class="blurb">I am a software developer and student from Arkansas, United States.</h2>
  <h2 class="blurb">My passion is web applications and full stack development.</h2>

  <br><br><br><br>
    <h2 class="medium-title">What's New?</h2>
  <br><br><br><br>

  <v-row>
  <v-col cols="1"></v-col>
  <v-col cols="4">
    <a style="text-decoration: none; color: inherit;" href="https://www.bible.com/bible/111/1PE.4.10" target="_blank" rel="noopener noreferrer">
    <v-card
    class="mx-auto"
    max-width="344"
    color="#55a176"
    >
      <v-card-text>
        <div>1 Peter 4:10</div>

        <p class="text-h4 font-weight-black">Each of you</p>

        <p>should use whatever gift you have received to serve others, as faithful stewards of God's grace in its various forms.</p>
      </v-card-text>
    </v-card>
    </a>
  </v-col>
  <v-col cols="3">
    <v-card
    class="mx-auto"
    max-width="500"
    color="#55a176"
    >
      <v-card-text>
        <div>Word of the Day</div>

        <p class="text-h4 font-weight-black">be•nev•o•lent</p>

        <p>adjective</p>

        <div class="text-medium-emphasis">
          well meaning and kindly.<br>
          "a benevolent smile"
        </div>
      </v-card-text>

      <v-card-actions>
        <v-btn
          color="deep-purple-accent-4"
          text="Learn More"
          variant="text"
        ></v-btn>
      </v-card-actions>
    </v-card>
  </v-col>
  </v-row>
  

  
</template>
