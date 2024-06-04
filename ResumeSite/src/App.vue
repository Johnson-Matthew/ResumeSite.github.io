<!-- 

   _____                _           _   ____                      __  __           _     _          _           _                                   
  / ____|              | |         | | |  _ \             _      |  \/  |         | |   | |        | |         | |                                  
 | |     _ __ ___  __ _| |_ ___  __| | | |_) |_   _      (_)     | \  / |   __ _  | |_  | |_       | |   ___   | |__    _ __    ___    ___    _ __  
 | |    | '__/ _ \/ _` | __/ _ \/ _` | |  _ <| | | |             | |\/| |  / _` | | __| | __|  _   | |  / _ \  | '_ \  | '_ \  / __|  / _ \  | '_ \ 
 | |____| | |  __/ (_| | ||  __/ (_| | | |_) | |_| |      _      | |  | | | (_| | | |_  | |_  | |__| | | (_) | | | | | | | | | \__ \ | (_) | | | | |
  \_____|_|  \___|\__,_|\__\___|\__,_| |____/ \__, |     (_)     |_|  |_|  \__,_|  \__|  \__|  \____/   \___/  |_| |_| |_| |_| |___/  \___/  |_| |_|
                                               __/ |                                                                                                
                                              |___/                                                                                                 
-->
<template>
  <v-app>
    <v-app-bar
      app
      :color="color"
    >
    <v-col cols="4" class="mb-2"></v-col>


      <v-col cols="auto" class="mb-2">
        <router-link :to="{path: '/'}">
          <v-btn  
          style="background-color: #FFFFFF;"
          rounded
          color="#55a176"
          dark
          >
            <div class="homeBtn">
              <v-icon>mdi-home</v-icon> Landing
            </div>
          </v-btn>
        </router-link>
      </v-col>

      <v-col cols="auto" class="mb-2">
        <router-link :to="{path: '/education'}">
          <v-btn  
          style="background-color: #FFFFFF;"
          rounded
          color="#55a176"
          dark
          >
            <div class="educationBtn">
              <v-icon>mdi-pencil</v-icon> Education
            </div>
          </v-btn>
        </router-link>
      </v-col>

      <v-col cols="auto" class="mb-2">
        <router-link :to="{path: '/career'}">
          <v-btn  
          style="background-color: #FFFFFF;"
          rounded
          color="#55a176"
          dark
          >
            <div class="careerBtn">
              <v-icon>mdi-bag-suitcase</v-icon> Career
            </div>
          </v-btn>
        </router-link>
      </v-col>


      <v-col cols="auto" class="mb-2">
        <router-link :to="{path: '/about'}">
          <v-btn  
          style="background-color: #FFFFFF;"
          rounded
          color="#55a176"
          dark
          >
            <div class="aboutBtn">
              <v-icon>mdi-magnify</v-icon> About
            </div>
          </v-btn>
        </router-link>
      </v-col>


      <v-col cols="3" class="mb-2">
        <div class="text-right">
          <v-tooltip v-if="!$vuetify.theme.dark" bottom>
            <template #activator="{ on }">
              <v-btn v-bind="on" style="background-color: #FFFFFF;" rounded @click="darkMode">
                <v-icon color="#55a176" class="mr-1">mdi-moon-waxing-crescent</v-icon>
              </v-btn>
            </template>
            <span>Dark Mode On</span>
          </v-tooltip>

          <v-tooltip v-else bottom>
            <template #activator="{ on }">
              <v-btn v-bind="on" color="#55a176" style="background-color: #FFFFFF;" rounded @click="darkMode">
                <v-icon color="yellow">mdi-white-balance-sunny</v-icon>
              </v-btn>
            </template>
            <span>Dark Mode Off</span>
          </v-tooltip>
        </div>
      </v-col>
      
      <v-spacer></v-spacer>

      <v-col cols="1" class="mb-2"></v-col>
    </v-app-bar>



    <v-main>
      <v-col>
        <!-- this is for blankspace -->
        
        
      </v-col>
      <router-view/>
    </v-main>

    <v-footer
      class="footer"
      color="#55a176"
    >
      <div>
        <v-btn
          v-for="icon in socialIcons"
          :key="icon.name"
          :icon="icon.icon"
          class="mx-4"
          variant="text"
        >
          <a style="text-decoration: none; color: inherit;" :href="icon.url" target="_blank" rel="noopener noreferrer">
            <v-icon>{{ icon.icon }}</v-icon>
          </a>
        </v-btn>
            <br>
            Copyright © {{ new Date().getFullYear() }} Matt E. Johnson. All rights reserved.
          
            The content, design, and graphics on this website are the property of Matt E. Johnson and are protected by intellectual property laws. 
            The information and materials provided on this website are for the sole 
            use of visitors to obtain information about our services.
          
            You may not reproduce, distribute, modify, transmit, display, perform, publish, license, create derivative works from, transfer,
            or sell any information or materials obtained from this website without the prior written
            consent of Matt E. Johnson.
          
            Unauthorized use of any content, design, or graphics on this website may violate copyright laws and could result in legal penalties.
            We reserve the right to take appropriate legal action against any individual or organization found to be 
            infringing upon our intellectual property rights.
            <br>
            {{ new Date().getFullYear() }} — <strong>Matt E. Johnson</strong>
      </div>
    </v-footer>
  </v-app>
</template>

<script>
import { useTheme } from 'vuetify';
export default {
  name: 'App',
  data: () => ({
    color: '#55a176',
    screenWidth: 0,
    isSmallWidow: false,
    isDarkMode: false,
    theme: useTheme(),
    angle: '50',
    color1: 'red',
    color2: 'blue',
    socialIcons: [
      { name: 'facebook', icon: 'mdi-facebook', url: 'https://www.facebook.com/profile.php?id=100063592013642'},
      { name: 'github', icon: 'mdi-github', url: 'https://github.com/Johnson-Matthew' },
      { name: 'linkedin', icon: 'mdi-linkedin', url: 'https://www.linkedin.com/in/matt-johnson-378b75220?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app' },
      { name: 'instagram', icon: 'mdi-instagram', url: 'https://www.instagram.com/mattiaus?igsh=MWNiZHZiOW9hY2FqMQ==' },
    ],
  }),

   mounted() {
    this.updateScreenWidth();
    this.onScreenResize();
  },

  computed: {
    createBackgroundString() {
      return `linear-gradient(${this.angle}deg, ${this.color1}, ${this.color2})`;
    }
  },

  methods:{
    darkMode() {
      this.isDarkMode = !this.isDarkMode
      this.theme.global.name = this.isDarkMode ? "dark" : "light"
    },

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
  
};



</script>
<style>
  #app{
    text-align: left;
    margin-top: 55px;
  }

  .footer{
    position:absolute;
    bottom:0;
    width:100%;
    height:100px; 
    text-align: center;
  }

</style>