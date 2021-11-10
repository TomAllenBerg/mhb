<template>
  <div class="sidebar">
    <SidebarButton text = "Home" page = "/" imageSource = "HomeIcon.png"/>
    <SidebarButton text = "About" page = "about" imageSource = "AboutIcon.png"/>
    <SidebarButton text = "Prescriptions" page = "prescription" imageSource = "PrescriptionIcon.png"/>
    <SidebarButton text = "Medical History" page = "medical" imageSource = "HistoryIcon.png"/>
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
  background: #fbe8a6;
  overflow-x: hidden;
}
</style>
