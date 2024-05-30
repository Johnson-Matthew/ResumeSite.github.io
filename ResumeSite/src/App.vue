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


      <v-col cols="1" class="mb-2">
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

      <v-col cols="1" class="mb-2">
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

      <v-col cols="1" class="mb-2">
        <router-link :to="{path: '/projects'}">
          <v-btn  
          style="background-color: #FFFFFF;"
          rounded
          color="#55a176"
          dark
          >
            <div class="projectsBtn">
              <v-icon>mdi-bag-suitcase</v-icon> Projects
            </div>
          </v-btn>
        </router-link>
      </v-col>


      <v-col cols="1" class="mb-2">
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
    isDarkMode: true,
    theme: useTheme(),
  }),

   mounted() {
    this.updateScreenWidth();
    this.onScreenResize();
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

</style>