<template>
  <div id="app">
    <AppHeader @searchClick="search($event)" />
    <AppMain />
    
  </div>
</template>

<script>
import AppHeader from './components/AppHeader.vue';
import AppMain from './components/AppMain.vue';
import axios from "axios";


export default {
  name: "App",
  components: {
    AppHeader,
    AppMain,
},
data(){
  return {
    apikey:"7fb4150702f278160c0f7444e689d554",
  }
},
methods:{
  search(searchkey) {
    axios.get("https://api.themoviedb.org/3/movie",{
      params:{
        api_key: this.apikey,
        query: searchkey
      }
    }
    )
    .then((resp) => {
      console.log(resp);
    });
  },
},


};
</script>

<style lang="scss">
@import "./style/common.scss"


</style>
