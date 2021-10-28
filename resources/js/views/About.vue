<template>
  <div class="about">
    <Sidebar/>
    <h1>This is an about page</h1>
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'

export default {
  name: 'About',
  components: {
    Sidebar
  }
}
</script>

<style>
.about {
  color: white !important;
}
</style>
