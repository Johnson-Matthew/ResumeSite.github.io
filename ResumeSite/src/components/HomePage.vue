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
  font-size: 5em; 
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
  text-align: center;
}
</style>
<template>

  <h1 class="huge-title">Hi, I'm Matt.</h1>
  <h2 class="blurb">I am a software developer and student from Arkansas, United States.
                    My focus is web applications and full stack development.</h2>
  <div class ="float-right">
    <v-img
        :aspect-ratio="0.6"
        class="bg-white"
        src="/src/assets/image-removebg-preview.png"
        width="500"
        cover
      >
    </v-img>
  </div>
  <v-col
          class="mb-5"
          cols="3"
          center
        >
        <v-card
          color = "#55a176"
          class="justify-center"
          max-width="400"
          height="400"
        >
          <router-link style="text-decoration: none; color: inherit;" :to="{path: '/history'}">
          <div class="text-center">
          <h2 class="medium-title">New</h2>
            <v-card-text class="text--primary">
              <br>
            </v-card-text>
          </div>
          </router-link>
        </v-card>
      </v-col>


  

  <v-footer
    class="footer"
    color="#55a176"
  >
    <div>
      <v-btn
        v-for="icon in icons"
        :key="icon"
        :icon="icon"
        class="mx-4"
        variant="text"
      ></v-btn>
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
        
          By accessing and using this website, you agree to comply with all copyright laws and acknowledge that any unauthorized use may subject you to civil and criminal liability.
        
          For inquiries regarding the use of copyrighted materials or permissions to use specific content, please contact Matt E. Johnson at mattejohnson2004@gmail.com.
        
          <br>This copyright statement is subject to change without notice. 
          <br>
          {{ new Date().getFullYear() }} — <strong>Matt E. Johnson</strong>
    </div>
  </v-footer>
</template>
