<template>
  <div>
      <HeaderMain />
      <router-view></router-view>
  </div>
</template>

<script>
import HeaderMain from '../components/HeaderMain.vue';
import ContainerPost from '../components/ContainerPost.vue';

export default {
    name: 'App',
    components: {
        HeaderMain,
        ContainerPost,
    }

}
</script>

<style>

</style>