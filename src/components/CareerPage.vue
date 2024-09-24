<style scoped>

.huge-title {
  font-size: 12em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.card-title {
  font-size: 4.5ex; 
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

.avatar-title{
  font-size: 4ex; 
  font-weight: bold;
  text-align: center;
}

.rounded-card{
  justify-content: center;
  border-radius: 30px;
}

.blurb{
  text-align: center;
}
</style>

<script>
  export default {
    data: () => ({
      startDate: '05-15-2023',
      startDateJSM: '04-15-2019'
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

    computed:{
      elapsedTimeArcb(){
        const startDate = new Date(this.startDate);
        const now = new Date();

        let years = now.getFullYear() - startDate.getFullYear();
        let months = now.getMonth() - startDate.getMonth();

        if (months < 0) {
          years--;
          months += 12;
        }

        return `${years} years, ${months} months`;
      },

      elapsedTimeJSM(){
        const startDate = new Date(this.startDateJSM);
        const now = new Date();

        let years = now.getFullYear() - startDate.getFullYear();
        let months = now.getMonth() - startDate.getMonth();

        if (months < 0) {
          years--;
          months += 12;
        }

        return `${years} years, ${months} months`;
      },
    }
  }

  
</script>
<template>

  <h1 class="huge-title">Career.</h1>

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
        max-height="900"
      >
      <v-row>
        <v-col cols="12"></v-col>
      </v-row>
      <v-row>
        <v-col cols="1"></v-col>
        <v-col cols="2">
          <v-avatar
          size="100px"
          >
          <v-img
            src="/ResumeSite.github.io/src/assets/arcb.png"
          >
          </v-img>
          </v-avatar>
        </v-col>
        <v-col cols="6">
          <div class="card-title">ArcBest Technologies</div>
          <div class="sub-title">{{ elapsedTimeArcb }}</div>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
          <div>⦿ Software Developer Part-time</div>
          <div>August 2023 - Present </div>
          <br>
          <div>⦿ Software Developer Intern</div>
          <div>May 2023 - August 2023</div>
          <br>
          <div> - Created a web application to be used for third party carriers that
          allows them to report deliveries, see previous and future deliveries, and update certain aspects of the report that has been created.</div>
          <div> - Created authorization measures for web applications using Auth0 and JavaScript</div>
          <div> - Re-wrote applications written in COBOL to use modern programming standards</div>
          <div> - Created .NET & .NET framework applications using C#, Vue, and Auth0</div>
          <div> - Managed Databases and created validation methods to authorize access.</div>

          <br>
        </v-col>
      </v-row>
      </v-card>
    </v-col>
    <v-col cols="3"></v-col>
  </v-row>

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
        max-height="400"
      >
      <v-row>
        <v-col cols="12"></v-col>
      </v-row>
      <v-row>
        <v-col cols="1"></v-col>
        <v-col cols="2">
          <v-avatar
          size="100px"
          color="#eb4713"
          >
          <div class="avatar-title">JSM</div>
          </v-avatar>
        </v-col>
        <v-col cols="6">
          <div class="card-title">JSM Lawnscapes</div>
          <div class="sub-title">{{ elapsedTimeJSM }}</div>
        </v-col>

        <v-card-text class="text--primary"></v-card-text>
      </v-row>
      <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
          <div>⦿ Co-Chief Executive Officer</div>
          <div>April 2019 - Present </div>
          <br>
        </v-col>
      </v-row>
      </v-card>
    </v-col>
    <v-col cols="3"></v-col>
  </v-row>

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
        max-height="400"
      >
      <v-row>
        <v-col cols="12"></v-col>
      </v-row>
      <v-row>
        <v-col cols="1"></v-col>
        <v-col cols="2">
          <v-avatar
          size="100px"
          >
            <v-img
              src="/ResumeSite.github.io/src/assets/hccwlogo.png"
            >
            </v-img>
          </v-avatar>
        </v-col>
        <v-col cols="6">
          <div class="card-title">Hutchins Cleaning LLC</div>
          <div class="sub-title">2 years, 2 months</div>
        </v-col>

        <v-card-text class="text--primary"></v-card-text>
      </v-row>
      <v-row>
        <v-col cols="2"></v-col>
        <v-col cols="8">
          <div>⦿ Chief Executive Officer</div>
          <div>March 2020 - May 2022 </div>
          <br>
        </v-col>
      </v-row>
      </v-card>
    </v-col>
    <v-col cols="3"></v-col>
  </v-row>

</template>
