import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

import 'vuetify/dist/vuetify.min.css' // Import Vuetify styles
import 'vuetify/styles'


export default createVuetify({
    components,
    directives,
  theme: {
    defaultTheme: "light",
    themes: {

      light: {
        dark: false,
        colors: {
          primary: '#046A38',
          secondary: '#424242', // Replace with your desired secondary color
          accent: '#000000', // Replace with your desired accent color
          error: '#FF5252', // Replace with your desired error color
          background: '#EEEEEE', // Replace with your desired background color
        }
      },
      
      dark: {
        dark: true,
        colors: {
          primary: '#1976D2', // Replace with your desired dark primary color
          
          background: '#000000', // Replace with your desired dark background color
        }
      },

    },
  },
})