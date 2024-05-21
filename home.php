<!DOCTYPE html>
<html>
<head>
  <title>Hutchins Cleaning LLC</title>
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.js"></script>
  <style>
    .btn {
      color: white;
    }
  </style>
</head>
<body>
  <div id="app">
    <v-app>
      <v-container>
        <v-row class="text-center">
          <!-- MAIN IMAGE -->
          <v-col cols="12">
            <v-img src="images/bottleoutline.png" class="my-3" contain height="225"></v-img>
          </v-col>

          <v-col class="mb-4">
            <h1 class="display-2 font-weight-bold mb-3">Hutchins Cleaning LLC</h1>
            <p class="subheading font-weight-regular">
              Are you tired of spending your precious time cleaning and scrubbing? Let us take care of it for you! 
              <br>Our professional cleaning team is here to provide you with a top-notch Cleaning Service that will leave your home or business looking and feeling fresh.
            </p>
          </v-col>

          <v-col class="mb-5" cols="12">
            <h1>Cleaning Services Overview</h1>
          </v-col>

          <v-col class="mb-5" cols="12"></v-col>

          <!-- PACKAGE INFORMATION HERE -->
          <!-- CLEANING PACKAGE 1 -->
          <v-col class="mb-5" cols="4">
            <div class="text--primary">
              <v-hover>
                <template v-slot:default="{ hover }">
                  <v-card :elevation="hover ? 24 : 6" class="mx-auto pa-2">
                    <h1>Basic Clean</h1><br>
                    <h2>Product Description</h2><br>
                    This package includes dusting, surface cleaning, vacuuming, mopping, bathroom sanitization, and kitchen cleaning.
                    <br>
                  </v-card>
                </template>
              </v-hover>
            </div>
            <br>
          </v-col>

          <!-- CLEANING PACKAGE 2 -->
          <v-col class="mb-5" cols="4">
            <div class="text--primary">
              <v-hover>
                <template v-slot:default="{ hover }">
                  <v-card :elevation="hover ? 24 : 6" class="mx-auto pa-2">
                    <h1>Deep Clean</h1><br>
                    <h2>Product Description</h2><br>
                    This package includes floor care, kitchen sanitization, bathroom deep clean, window and glass cleaning, and baseboard and wall cleaning.
                  </v-card>
                </template>
              </v-hover>
            </div>
            <br>
          </v-col>

          <!-- CLEANING PACKAGE 3 -->
          <v-col class="mb-5" cols="4">
            <div class="text--primary">
              <v-hover>
                <template v-slot:default="{ hover }">
                  <v-card :elevation="hover ? 24 : 6" class="mx-auto pa-2">
                    <h1>Construction Work</h1><br>
                    <h2>Product Description</h2><br>
                    This package includes post-construction cleanup, detailed dusting, floor care, window and glass cleaning, and interior/exterior surface cleaning<br>
                  </v-card>
                </template>
              </v-hover>
            </div>
            <br>
          </v-col>

          <!--MORE INFO BUTTON FOR PACKAGE 1  -->
          <v-col class="mb-5" cols="4">
            <div class="text-center">
              <v-dialog v-model="dialog" width="500">
                <template v-slot:activator="{ on, attrs }">
                  <v-btn color="#F48FB1" dark v-bind="attrs" v-on="on">Learn More</v-btn>
                </template>
                <v-card>
                  <v-card-title class="text-h5 pink lighten-3">Basic Clean</v-card-title>
                  <v-card-text>
                    <br><br>
                    <ul>
                      <li>
                        <h3>Dusting and wiping down surfaces: Say goodbye to dusty shelves and dirty countertops. Our team will dust and wipe down all surfaces, leaving them spotless and gleaming.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Vacuuming and mopping floors: We'll make sure your floors are free from dirt, crumbs, and dust bunnies. Our vacuuming and mopping techniques will leave your floors looking pristine and inviting.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Bathroom sanitization: We understand the importance of a clean and hygienic bathroom. Our team will thoroughly sanitize your bathroom, including the toilet, sink, and shower, leaving them sparkling clean and fresh.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Kitchen cleaning: The heart of your home deserves special attention. We'll clean your kitchen countertops, wipe down appliances, and tackle those greasy stovetops. You'll be amazed at the transformation!</h3>
                      </li>
                    </ul>
                    <br>
                    <h3>Call today for a free quote!</h3>
                  </v-card-text>
                  <v-divider></v-divider>
                </v-card>
              </v-dialog>
            </div>
          </v-col>

          <!--MORE INFO BUTTON FOR PACKAGE 2  -->
          <v-col class="mb-5" cols="4">
            <div class="text-center">
              <v-dialog v-model="dialog" width="500">
                <template v-slot:activator="{ on, attrs }">
                  <v-btn color="#F48FB1" dark v-bind="attrs" v-on="on">Learn More</v-btn>
                </template>
                <v-card>
                  <v-card-title class="text-h5 pink lighten-3">Deep Clean</v-card-title>
                  <v-card-text>
                    <br><br>
                    <ul>
                      <li>
                        <h3>Floor Care: We vacuum carpets and rugs to eliminate dirt and debris, followed by a thorough mopping of hard floors to restore their shine and cleanliness.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Kitchen Sanitization: We deep clean your kitchen, tackling grease, stains, and lingering odors. This includes cleaning appliances, countertops, cabinets, and disinfecting sinks and faucets.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Bathroom Deep Clean: We sanitize and disinfect your bathroom to eliminate bacteria, mold, and mildew. Our services include cleaning toilets, sinks, showers, tubs, tiles, mirrors, and grout.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Window and Glass Cleaning: We ensure your windows and glass surfaces are crystal clear by removing smudges, fingerprints, and dirt.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Baseboard and Wall Cleaning: We pay attention to details by cleaning baseboards and walls, removing dust, cobwebs, and stains.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>High-Quality Cleaning Products: We use eco-friendly and effective cleaning products that are safe for you, your family, and the environment.</h3>
                      </li>
                    </ul>
                    <br>
                    <h3>Call today for a free quote!</h3>
                  </v-card-text>
                  <v-divider></v-divider>
                </v-card>
              </v-dialog>
            </div>
          </v-col>

          <!--MORE INFO BUTTON FOR PACKAGE 3  -->
          <v-col class="mb-5" cols="4">
            <div class="text-center">
              <v-dialog v-model="dialog" width="500">
                <template v-slot:activator="{ on, attrs }">
                  <v-btn color="#F48FB1" dark v-bind="attrs" v-on="on">Learn More</v-btn>
                </template>
                <v-card>
                  <v-card-title class="text-h5 pink lighten-3">Construction Work</v-card-title>
                  <v-card-text>
                    <br><br>
                    <ul>
                      <li>
                        <h3>Post-Construction Cleanup: After the dust settles, we ensure your construction site is pristine, removing debris, dirt, and construction materials.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Detail-oriented Dusting: We meticulously eliminate fine dust particles from surfaces, walls, ceilings, and fixtures, leaving no trace behind.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Floor Care: Our team expertly cleans and polishes all types of flooring, including hardwood, tile, concrete, and carpets, ensuring a clean and finished look.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Window and Glass Cleaning: We make sure your windows and glass surfaces are crystal clear, free from smudges, paint splatters, and construction residue.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Sanitization and Disinfection: Our team uses industry-approved methods and products to eliminate germs, bacteria, and pathogens, creating a safe and hygienic environment.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Interior and Exterior Surface Cleaning: From walls to countertops, cabinets to appliances, we thoroughly clean and sanitize all surfaces, ensuring a fresh and inviting space.</h3>
                      </li>
                      <br>
                      <li>
                        <h3>Final Touches: We pay attention to the details, including fixture polishing, grout cleaning, and overall touch-ups, ensuring your space looks immaculate.</h3>
                      </li>
                    </ul>
                    <br>
                    <h3>Call today for a free quote!</h3>
                  </v-card-text>
                  <v-divider></v-divider>
                </v-card>
              </v-dialog>
            </div>
          </v-col>

          <!-- CONTACT INFORMATION -->
          <v-col class="mb-5" cols="12">
            <h2 class="headline font-weight-bold mb-3">Contact Information</h2>
          </v-col>
          
          <!-- CONTACT BUTTONS -->
          <v-col class="mb-2" cols="3">
            <div class="text-center">
              <v-btn rounded color="primary" dark>
                <v-icon>mdi-phone</v-icon>
                <a href="tel:4792227044"><div class="btn">Call</div></a>
              </v-btn>
            </div>
          </v-col>

          <v-col class="mb-2" cols="3">
            <div class="text-center">
              <v-btn rounded color="primary" dark>
                <v-icon>mdi-email</v-icon>
                <a href="mailto:mattejohnson2004@gmail.com"><div class="btn">Email</div></a>
              </v-btn>
            </div>
          </v-col>

          <v-col class="mb-2" cols="3">
            <div class="text-center">
              <v-btn rounded color="primary" dark>
                <v-icon>mdi-instagram</v-icon>
                <a href="https://www.instagram.com/hutchinscleaningllc/" target="_blank"><div class="btn">Instagram</div></a>
              </v-btn>
            </div>
          </v-col>

          <v-col class="mb-2" cols="3">
            <div class="text-center">
              <v-btn rounded color="primary" dark>
                <v-icon>mdi-facebook</v-icon>
                <a href="https://www.facebook.com/hutchinscleaningllc" target="_blank"><div class="btn">Facebook</div></a>
              </v-btn>
            </div>
          </v-col>

          <!-- COPYRIGHT INFO -->
          <v-footer dark padless>
            <v-card :elevation="hover ? 24 : 6" tile class="pink lighten-3 white--text text-center">
              <v-card-text></v-card-text>
              <v-card-text class="black--text pt-0">
                Copyright © 2023 Hutchins Cleaning LLC. All rights reserved.
                The content, design, and graphics on this website are the property of Hutchins Cleaning LLC and are protected by intellectual property laws. 
                The information and materials provided on this website are for the sole use of visitors to obtain information about our services.
                You may not reproduce, distribute, modify, transmit, display, perform, publish, license, create derivative works from, transfer, or sell any information or materials obtained from this website without the prior written consent of Hutchins Cleaning LLC.
                Unauthorized use of any content, design, or graphics on this website may violate copyright laws and could result in legal penalties.
                We reserve the right to take appropriate legal action against any individual or organization found to be infringing upon our intellectual property rights.
                By accessing and using this website, you agree to comply with all copyright laws and acknowledge that any unauthorized use may subject you to civil and criminal liability.
                For inquiries regarding the use of copyrighted materials or permissions to use specific content, please contact Hutchins Cleaning LLC at 479-222-7044.
                <br>This copyright statement is subject to change without notice.
              </v-card-text>
              <v-divider></v-divider>
              <v-card-text class="black--text">
                <?php echo date('Y'); ?> — <strong>Hutchins Cleaning LLC</strong>
              </v-card-text>
            </v-card>
          </v-footer>
        </v-row>
      </v-container>
    </v-app>
  </div>

  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      data: () => ({
        dialog: false
      }),
    });
  </script>
</body>
</html>
