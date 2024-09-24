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

.rounded-card{
  justify-content: center;
  border-radius: 30px;
}
</style>
<template>

  <h1 class="huge-title">Education.</h1>
    <v-row>
      <v-col cols="2"></v-col>
      <v-col
          class="mb-5"
          cols="4"
          center
        >
        <v-card
          color = "#D7D2CB"
          class="rounded-card"
          max-width="600"
          height="680"
        >
        <div class ="float-center">
          <v-img
              :aspect-ratio="20/6"
              src="/ResumeSite.github.io/src/assets/uafs.png"
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

            </v-card-text>
          </div>
        </v-card>
      </v-col>

      <v-col
          class="mb-5"
          cols="4"
          center
        >
        <v-card
          color = "#D7D2CB"
          class="rounded-card"
          max-width="600"
          height="680"
        >
        <div class ="float-center">
          <v-img
              :aspect-ratio="20/6"
              src="/ResumeSite.github.io/src/assets/uafs.png"
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

            </v-card-text>
          </div>
        </v-card>
      </v-col>
      <v-col cols="2"></v-col>
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
          class="rounded-card"
          max-width="600"
          min-width="auto"
          height="450"
        >
        <div class ="float-center">
          <v-img
              :aspect-ratio="20/6"
              src="/ResumeSite.github.io/src/assets/uafs.png"
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


        <v-col cols="4"></v-col>
       
    </v-row>




</template>
