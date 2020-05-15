<template>
  <!-- This is where our HTML will live -->
  <div>
    <!-- we use the {{}} notation to display our props values -->
    <h1>{{ title }}</h1>
    <p>{{ tagline }}</p>
    <section>
      <!-- display the current track and artist name -->
      <h2>Now playing : {{ current.title }}</h2>
      <p>By : {{ current.artist }}</p>
      <!-- display controls for the player -->

      <!-- @click acts as addEventListener would and will call a callback function when event is fired -->
      <button @click="prev" :disabled="index <= 0">Prev</button>

      <!-- we use conditional rendering using v-if ... v-else -->
      <button v-if="!isPlaying" @click="play">Play</button>
      <button v-else @click="pause">Pause</button>
      <button @click="next" :disabled="index >= songs.length - 1">Next</button>
    </section>
    <section>
      <!-- display our playlist -->
      <h2>Ma playlist</h2>
      <div v-for="song in songs" :key="song.src">
        <h3>Track : {{ song.title }}</h3>
        <p>Artist : {{ song.artist }}</p>
        <button @click="play(song)">Play</button>
      </div>
    </section>
  </div>
</template>

<script>
// This is where our js code lives
// we need to give a name to our component and export it to make it avalable across our application
export default {
  name: "Player",
  // our components await 2 props
  props: {
    title: String,
    tagline: String
  },
  // data is a function and returns an object which represents the state of our component
  data() {
    return {
      // create a current property and initialize it to an empty object.
      current: {},
      index: 0,
      isPlaying: false,
      // songs property contains an array of songs as objects
      songs: [
        {
          title: "Dog Soldier Stand Down",
          artist: "Small Tall Order",
          src: require("../assets/music/Aglow_Hollow_-_04_-_Dog_Soldier___Stand_Down.mp3")
        },
        {
          title: "Brooklyn",
          artist: "The Inventors",
          src: require("../assets/music/The_Inventors_-_12_-_Brooklyn.mp3")
        },
        {
          title: "Upbeat Party",
          artist: "Scott Holmes",
          src: require("../assets/music/Scott_Holmes_-_04_-_Upbeat_Party.mp3")
        },
        {
          title: "Dog Soldier Stand Down",
          artist: "Aglow Hollow",
          src: require("../assets/music/Aglow_Hollow_-_04_-_Dog_Soldier___Stand_Down.mp3")
        }
      ],
      // we initialize a new player
      player: new Audio()
    };
  },
  mounted() {
    // this method is part of Vuejs lifecycle components methods.
    // more here : https://blog.logrocket.com/introduction-to-vue-lifecycle-hooks/

    // assign the first song of our array to the state current property
    this.current = this.songs[this.index];

    // set player source to current song source
    this.player.src = this.current.src;
  },
  // the methods property value is an object which holds our custom functions
  methods: {
    // start the player when play button is clicked
    play(song) {
      // check if song has been passed as a parameter
      if (typeof song.src !== "undefined") {
        // if yes set current value to song
        this.current = song;
        this.player.src = this.current.src;
      }
      this.isPlaying = true;
      this.player.play();
    },
    // pause player when pause button clicked
    pause() {
      this.isPlaying = false;
      this.player.pause();
    },
    // skip to previous song
    prev() {
      // if index <= 0 set index to 0 (first song)
      if (this.index <= 0) {
        this.index = 0;
      } else {
        // else substract 1 to index
        this.index--;
      }

      // set current value to song in array with matching index
      this.current = this.songs[this.index];

      // set new source as player source
      this.player.src = this.current.src;
      this.isPlaying = true;
      this.player.play();
    },
    next() {
      // check that index is not > to songs array length
      if (this.index >= this.songs.length - 1) {
        this.index = this.songs.length - 1;
        // if we want to loop to first song alternatively
        // this.index = 0;
      } else {
        this.index++;
      }

      // set current value to corresponding song in array
      this.current = this.songs[this.index];

      // set new source as player source
      this.player.src = this.current.src;
      this.isPlaying = true;
      this.player.play();
    }
  }
};
</script>

<style scoped>
/* our style lives here */
</style>
