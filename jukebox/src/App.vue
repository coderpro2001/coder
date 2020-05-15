<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png" />
    <!-- here we use the component and pass it the props it needs -->
    <Player title="Welcome to my JukeBox ! (So 80's)" tagline="Listen to my fav music" />
  </div>
</template>

<script>
// import Player component from components folder
// here "Player" is the name of the component we export in Player.vue
import Player from "./components/Player.vue";

export default {
  name: "App",
  components: {
    // here we declare the components we use
    Player
  }
};
</script>

<style>
/* 
This style will be applied globally
If you wish to limit the scope of CSS rules to the component only, you should use the keyword "scoped" on the style tag
 */
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
