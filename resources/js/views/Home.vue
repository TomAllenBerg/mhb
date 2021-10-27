<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/fav.png">
    <Sidebar/>
  </div>
</template>

<script>
// @ is an alias to /src
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
