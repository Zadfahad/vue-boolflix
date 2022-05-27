<template>

  <li class="card">
      <div class="card-items">
          <h2 class="title">Title</h2>
          <h4 class="original title">Original title</h4>
          <p class="language">language</p>
          <p class="rating">Rating</p>
      </div>
      

  </li>
</template>

<script>
export default {
    name: "AppCard"

}
</script>

<style lang="scss" scoped>
.card{
    width: calc(100% / 4 - 8px);
    margin: 4px;
    padding: 1rem;
    text-align: center;
    border: 2px solid red;

      
    
}

</style>