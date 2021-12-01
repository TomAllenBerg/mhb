<template>
  <div class="doctor">
    <Sidebar/>
    <h1>This is the doctor page</h1>
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

<style land="scss" scoped>
  .doctor {

    padding: 20px;
    margin-left: 130px;/*account for sidebar*/
  }
</style>