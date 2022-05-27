<template>
  <section class="movies">
      <div class="container">
          <ul movies-list>
              <AppCard/>
               
          </ul>
      </div>
  </section>
</template>

<script>
import AppCard from "./AppCard.vue"
export default {
    name: "AppMenu",
    components: {
        AppCard
    }

}
</script>

<style lang="scss" scoped>
.movies{
    padding-top: 2rem;
    display: flex;
  
    &-list {
        display: flex;
        flex-wrap: wrap;
    }
}

</style>