<template>
  <div class="Sidebar">
    <SidebarButton text = "Prescriptions" color = "#fff0a5" page = "Prescription"/>
    <SidebarButton text = "Medical History" color = "#fff0a5" page = "About"/>
    <SidebarButton text = "Doctors" color = "#fff0a5" page = "Doctor" />
  </div>
</template>

<script>
import SidebarButton from './SidebarButton'

export default {
  name: 'Sidebar',
  components:  {
    SidebarButton
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
