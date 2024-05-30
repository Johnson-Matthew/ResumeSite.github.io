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
  bottom:-1;
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
<template>

  <h1 class="huge-title">Education.</h1>
    <v-row>
      <v-col cols="4"></v-col>
      <v-col
          class="mb-5"
          cols="4"
          center
        >
        <v-card
          color = "#D7D2CB"
          class="justify-center"
          max-width="600"
          height="750"
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
              Degree Completion
              <br><br>
              August 2021 - December 2024<br><br>
              Grade: 3.7 Cumulative GPA<br><br>
              Dean's List Fall 2021<br>
              Dean's List Spring 2022<br>
              Dean's List Fall 2022<br>
              Dean's List Spring 2023<br><br>
              AΛΔ Honor Society<br><br>
              Sigma Nu - Nu Alpha Chapter 2021 - 2024<br>
              Sigma Nu Social Chairman 2023 - 2024<br>
              Sigma Nu Public Relations 2022 - 2023<br><br>
              UAFS Digital Lions E-Sports Team 2021 - 2023<br><br>

              Skills: Linux System Administration ⋅ CSS ⋅ SQL ⋅ Java ⋅ Linux Kernel ⋅ JavaScript ⋅ Algorithms ⋅ HTML ⋅ Data Structures ⋅ Linux Security ⋅ Formal Languages ⋅ PHP ⋅ MariaDB

            </v-card-text>
          </div>
        </v-card>
      </v-col>
    </v-row>


    <v-row>
      <v-col cols="4"></v-col>
      <v-col
          class="mb-5"
          cols="4"
          center
        >
        <v-card
          color = "#D7D2CB"
          class="justify-center"
          max-width="600"
          height="700"
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
            <div class="sub-title">Associate of Arts - AA, General Studies</div>

            <v-card-text class="text--primary">
              <br>
              <v-progress-linear
                color="green"
                height="15"
                model-value="100"
                rounded
                striped
              ></v-progress-linear>
              Degree Completion
              <br><br>
              August 2022 - May 2024<br><br>
              Grade: 3.62 Cumulative GPA<br><br>
              Dean's List Spring 2022<br>
              Dean's List Fall 2022<br>
              Dean's List Spring 2023<br><br>
              AΛΔ Honor Society<br><br>
              Sigma Nu - Nu Alpha Chapter 2021 - 2024<br>
              Sigma Nu Social Chairman 2023 - 2024<br>
              Sigma Nu Public Relations 2022 - 2023<br><br>
              UAFS Digital Lions E-Sports Team 2021 - 2023<br><br>

              Skills: Calculus ⋅ Combinatorics ⋅ Linear Algebra ⋅ Speech ⋅ English Composition

            </v-card-text>
          </div>
        </v-card>


        
      </v-col>
      <v-col cols="4"></v-col>
    </v-row>
    
    
    <v-row>
        <v-col cols="2"></v-col>
        <v-col
          class="mb-5"
          cols="4"
          center
        >
        <v-card
          color = "#D7D2CB"
          class="justify-center"
          max-width="450"
          height="400"
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
            <div class="sub-title">Certificate of Proficiency, Cyber Systems</div>

            <v-card-text class="text--primary">
              <br>
              <v-progress-linear
                color="green"
                height="15"
                model-value="100"
                rounded
                striped
              ></v-progress-linear>
              Degree Completion
              <br><br>
              August 2019 - May 2021<br><br>
              Grade: 4.0 Cumulative GPA<br><br>

              Skills: SQL ⋅ Java ⋅ Python ⋅ Datascience

            </v-card-text>
          </div>
        </v-card>


        
      </v-col>
      <v-col cols="1"></v-col>
      <v-col
          class="mb-5"
          cols="4"
          center
        >
        <v-card
          
          color = "#002856"
          class="justify-center"
          max-width="450"
          height="400"
        >
          <div class="text-left">
            <div class="card-title">Southside Highschool</div>
            <div class="sub-title">Honors Diploma</div>
            <br>

            <v-card-text class="text--primary">
              <br>
              <v-progress-linear
                color="green"
                height="15"
                model-value="100"
                rounded
                striped
              ></v-progress-linear>
              Degree Completion
              <br><br>
              Grade: 4.0 Cumulative GPA<br><br>

              Southside Mavericks E-Sports Team 2019 - 2021
            </v-card-text>
          </div>
        </v-card>
        <v-col cols="2"></v-col>
      </v-col>
    </v-row>

    
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
            <br>
            {{ new Date().getFullYear() }} — <strong>Matt E. Johnson</strong>
      </div>
    </v-footer>
</template>
