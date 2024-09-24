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

.rounded-card{
  justify-content: center;
  margin-right: 20px;
  border-radius: 30px;
}

.card-title {
  font-size: 2em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.card-text{
  text-align: center;
}

.medium-title {
  font-size: 8em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.blurb{
  font-size: 2em; 
  text-align: center;
}

.verseText{
  font-size: 2ex;
  text-align: left;
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
  <v-col cols="2"></v-col>
  <v-col cols="3">
    <a style="text-decoration: none; color: inherit;" href="https://www.bible.com/bible/111/1PE.4.10" target="_blank" rel="noopener noreferrer">
    <v-card
    class="rounded-card"
    max-width="600"
    height="195"
    color="#55a176"
    >
      <v-card-text>
        <div>1 Peter 4:10</div>

        <p class="text-h4 font-weight-black">Each of you</p>

        <p class="verseText">should use whatever gift you have received to serve others, as faithful stewards of God's grace in its various forms.</p>
        <p class="verseText">NIV</p>
      </v-card-text>
    </v-card>
    </a>
  </v-col>
  <v-col cols="5">
    <a style="text-decoration: none; color: inherit;" href="/ResumeSite.github.io/vuetutorial" rel="noopener noreferrer">
    <v-card
        color = "#55a176"
        class="rounded-card"
        max-width="900"
        max-height="900"
      >
      <v-row>
        <v-col cols="12"></v-col>
      </v-row>
      <v-row>
        <v-col cols="1"></v-col>
        <v-col cols="2">
          <v-avatar
          color="#FFFFFF"
          size="100px"
          >
          <v-img
            src="/ResumeSite.github.io/src/assets/vuejs.png"
          >
          </v-img>
          </v-avatar>
        </v-col>
        <v-col cols="7">
          <div class="card-title">Getting Started with Vue 3</div>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
          <div class="card-text">Short tutorial for creating a Vue 3 project</div>
          <br>
        </v-col>
      </v-row>
      </v-card>
      </a>
      <br>
  </v-col>
  <v-col cols="2"></v-col>
  </v-row>
  
  <v-row>
  <v-col cols="2"></v-col>
  <v-col cols="3">
    <a style="text-decoration: none; color: inherit;" href="/ResumeSite.github.io/about" rel="noopener noreferrer">
    <v-card
    class="rounded-card"
    max-width="600"
    height="650"
    color="#55a176"
    >
      <v-card-text>
        <div class="card-title">Motorcycle Progress</div>
        <br>
        <div class ="float-center">
          <v-img
              src="/ResumeSite.github.io/src/assets/rebel.jpg"
              max-width="600"
              rounded
              cover
            >
          </v-img>
        </div>
      </v-card-text>
    </v-card>
    </a>
  </v-col>
  <v-col cols="5">
    <a style="text-decoration: none; color: inherit;" href="/ResumeSite.github.io/linuxtutorial" rel="noopener noreferrer">
    <v-card
        color = "#55a176"
        class="rounded-card"
        max-width="900"
        max-height="900"
      >
      <v-row>
        <v-col cols="12"></v-col>
      </v-row>
      <v-row>
        <v-col cols="1"></v-col>
        <v-col cols="2">
          <v-avatar
          color="#FFFFFF"
          size="100px"
          >
          <v-img
            src="/ResumeSite.github.io/src/assets/openSUSE.png"
          >
          </v-img>
          </v-avatar>
        </v-col>
        <v-col cols="7">
          <div class="card-title">How to create a Virtual Machine in Linux</div>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
          <div class="card-text">Tutorial on how to set up a virutal machine using openSUSE Linux, Apache Web Server, Php8, and Mariadb</div>
          <br>
        </v-col>
      </v-row>
      </v-card>
      </a>
      <br><br>
      
      <v-card
        color = "#55a176"
        class="rounded-card"
        max-width="900"
        height="368"
      >
      <v-row>
        <v-col cols="12"></v-col>
      </v-row>

      <v-card-text>
        <br>
        <div class ="float-center">
          <v-img
              src="/ResumeSite.github.io/src/assets/chopper.jpg"
              max-height="300"
              rounded
              cover
            >
          </v-img>
        </div>
      </v-card-text>
      </v-card>
      <br>
  </v-col>
  <v-col cols="2"></v-col>
  </v-row>
  <v-row>
    <br>
  </v-row>
  
</template>
