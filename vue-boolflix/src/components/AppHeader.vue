<template>
 <header class="header">
     <input type="text" placeholder="search..." v-model="searchkey">
     <button @click="$emit('searchClick', searchkey)">Search</button>
     </header>
</template>

<script>
export default {
    name: "AppHeader",
    data() {
        return {
            searchkey:""
        }
    }

}
</script>

<style lang="scss" scoped>
.header{
    padding: 2rem 1rem;
    background-color:aqua;
}

</style>