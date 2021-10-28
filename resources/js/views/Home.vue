<template>
  <div class="home">
    <Sidebar/>
    <img alt="MyHealthBin Logo" src="../assets/fav.png">
    <h1>Welcome to MyHealthBin!</h1>

  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'

export default {
  name: 'Home',
  components: {
    Sidebar
  }
}
</script>

<style>
.home {
  color: white;
}
</style>
