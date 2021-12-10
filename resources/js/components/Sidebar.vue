<template>
  <div class="sidebar">
    <SidebarButton text = "Home" page = "/" imageSource = "HomeIcon.png"/>
    <SidebarButton text = "About" page = "about" imageSource = "AboutIcon.png"/>
    <SidebarButton text = "Prescriptions" v-bind:page="this.prescriptionRoute" imageSource = "PrescriptionIcon.png"/>
    <SidebarButton text = "Medical History" v-bind:page="this.historyRoute" imageSource = "HistoryIcon.png"/>
    <SidebarButton text = "Doctors" v-bind:page="this.doctorRoute" imageSource = "DoctorIcon.png"/>
  </div>
</template>

<script>
import SidebarButton from './SidebarButton'

export default {
  name: 'Sidebar',
  components:  {
    SidebarButton
  },

   data() {
      return {
        prescriptionRoute: "",
        doctorRoute: "",
        historyRoute: ""
      }
  },

  mounted() {
    // On page load if the user is logged in this allows the user to access all pages on the sidebar
    if (this.$session.exists("sessionID")){
      this.prescriptionRoute = "prescription";
      this.doctorRoute = "doctor";
      this.historyRoute = "medical";
      
    }
    // If the user is not logged in the user will be redirected to the login page on certain pages.
    else {
      this.prescriptionRoute = "login";
      this.doctorRoute = "login";
      this.historyRoute = "login";
    }
  }
}
</script>

<style lang="scss" scoped>
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
