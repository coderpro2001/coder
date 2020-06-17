// imports
import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import "leaflet/dist/leaflet.css";

Vue.config.productionTip = false;

// fix display for marker icons (check vue2-leaflet doc)
import { Icon } from "leaflet";

delete Icon.Default.prototype._getIconUrl;
Icon.Default.mergeOptions({
  // uncomment and update for retina displays
  // iconRetinaUrl: require("leaflet/dist/images/marker-icon-2x.png"),

  // ici on spécifie l'image par défaut pour l'icône du marqueur
  // here we specify which default image will be used to display the marker
  iconUrl: require("@/assets/iss2.png"),

  // not used in this project
  // shadowUrl: require("leaflet/dist/images/marker-shadow.png"),
});

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
