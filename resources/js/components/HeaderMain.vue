<template>
  <div class="nav_2">
        <router-link class="router-link" :to="{ name:'home'}">HOME</router-link>
        <router-link class="router-link" :to="{ name:'PostIndex'}">LISTING POSTS</router-link>
        <router-link class="router-link" :to="{ name:'about'}">ABOUT US</router-link>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.router-link {
    cursor: pointer;
    margin: 2rem;
    font-size: 2rem;
    color: blue;
}

.nav_2 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 5rem;
}

</style>