<template>
  <div>
    <h1>{{ title }}</h1>
    <div id="map">
      <!-- le composant l-map a des propriétés zoom et center qu'on va rendre dynamiques en les liant aux propriété correspondantes du state (zoom, lat, lng) grâce à l'opérateur : (raccourci pour v-bind) -->
      <!-- we link l-map component's properties zoom & center to state properties lat & lng using the : operator (shortcut for v-bind)  -->

      <!-- ici on utilise le composant l-map -->
      <!-- here we use the l-map component -->
      <l-map :zoom="zoom" :center="[lat, lng]" style="height: 400px; width: 70%;">
        <!-- le composant l-tile-layer affiche le fond de carte -->
        <!-- l-tile-layer will display the map image -->
        <l-tile-layer :url="url" />

        <!-- le composant l-marker permet d'afficher un marqueur sur la carte aux coordonnées passées à la propriété lat-lng -->
        <!-- the l-marker component will display a marker on the map using the coordinates passed to lat-lng property -->
        <l-marker :lat-lng="[lat, lng]" title="test hover">
          <!-- le composant l-popup affiche un popup au clic sur le marker -->
          <!-- l-popup will display a popup when marker is clicked -->
          <l-popup>
            <div>
              <h3>ISS Coordinates</h3>
              <!-- ici on affiche les valeurs des propriétés lat & lng du state -->
              <!-- here we display lat & lng properties values -->
              <p>Latitude : {{ lat }}</p>
              <p>Longitude : {{ lng }}</p>
            </div>
          </l-popup>
        </l-marker>
      </l-map>
    </div>
  </div>
</template>

<script>
// import des composants
// components import
import { LMap, LTileLayer, LMarker, LPopup } from "vue2-leaflet";

export default {
  // nom du composant
  // component's name
  name: "Map",
  // props que le composant peut recevoir en provenance du composant parent
  // props the component can receive from parent
  props: {
    title: String
  },
  // liste des composants utiliés par le composant Map
  // list of components used in Map component
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LPopup
  },
  // data est une fonction qui renvoie le state du composant, c'est à dire les paires propriétés/valeurs locales que le composant va utiliser et contrôler
  // data is a function that returns the component state, the key/value pairs that the component will use and control
  data() {
    return {
      //   la propriété url va contenir l'url du fond carte qu'on va utiliser
      // url of map tiles layer
      url: "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
      //   ici on va configurer notre carte
      // map configuration
      lat: "",
      lng: "",
      zoom: 4
    };
  },
  // dans la propriété methods on stocke les fonctions qui seront nécessaires au fonctionnement du composant
  // in the methods property we store the functions that the component needs to work properly
  methods: {
    // AJAX fetch classique
    // AJAX call using fetch
    getIssPosition: function() {
      fetch("http://api.open-notify.org/iss-now.json")
        .then(response => response.json()) // équivalent de JSON.parse() // same as JSON.parse()
        .then(data => {
          // destructuring in javascript
          // const {latitude, longitude} = data.iss_position

          // this.lng = longitude
          // this.lat = latitude

          this.lng = data.iss_position.longitude;
          this.lat = data.iss_position.latitude;
        });
    },
    // AJAX fetch avec async await
    // AJAX call using async await
    getIssPositionasync: async function() {
      const response = await fetch("http://api.open-notify.org/iss-now.json");
      const json = await response.json();
      const { latitude, longitude } = json.iss_position;

      this.lng = longitude;
      this.lat = latitude;
    }
  },
  // on utilise la méthode created du cyle de vie des composants pour appeler notre fonction getIssPosition toutes les 5s
  // we use the created lifecyle method to call getIssPosition every 5s
  created() {
    this.getIssPosition();
    setInterval(() => {
      this.getIssPosition();
    }, 4000);
  }
};
</script>

<style scoped>
#map {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
