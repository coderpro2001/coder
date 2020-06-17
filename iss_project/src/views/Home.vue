<template>
  <div class="home">
    <!-- la propriété title est passée au composant Map -->
    <!-- title property is passed to Map component -->
    <Map title="Follow ISS on it's journey around earth" />
  </div>
</template>

<script>
// @ is an alias to /src
// import of Map component
import Map from "@/components/Map.vue";

export default {
  name: "Home",
  // déclaration des composants utilisés dans Home
  // declaration of components used in Home
  components: {
    Map
  }
};
</script>
