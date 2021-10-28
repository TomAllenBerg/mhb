<template>
  <div class="sidebar">
    <SidebarButton text = "Home" page = "/" imageSource = "DefaultIcon.png"/>
    <SidebarButton text = "About" page = "about" imageSource = "DefaultIcon.png"/>
    <SidebarButton text = "Prescriptions" page = "prescription" imageSource = "PrescriptionIcon.png"/>
    <SidebarButton text = "Medical History" page = "medical" imageSource = "DefaultIcon.png"/>
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

<style scoped>
.sidebar {
  height: 100%; 
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background: #fff950;
  overflow-x: hidden;
}
</style>
