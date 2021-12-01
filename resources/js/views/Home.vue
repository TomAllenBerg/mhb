<template>
  <div class="home">
    
    <Sidebar/>
    <div class="container">
      <div class="topGrid">
        <div class="topGridItem">
          <img alt="MyHealthBin Logo" src="../assets/fav.png" style="width: 50%; height: auto; justify-self: end;">
        </div>
        <div class="topGridItem">
          <h1 style="font-size:45px;">Welcome to MyHealthBin!</h1>
          <p><router-link to="/login" id="LoginRegisterLink">Login</router-link> | 
          <router-link to="/register" id="LoginRegisterLink">Register</router-link></p>
        </div>
      </div>
      <div class="grid">
        <button class="gridItemButton" @click="$router.push('about')">
        <div class="gridItem">
          <img src="../assets/sidebarLogos/AboutIcon.png" id="smallIcon">
          <h1 id="sectionHeading">About</h1>
          <p>Learn more about our mission and who we are.</p>
        </div>
        </button>
        <button class="gridItemButton" @click="$router.push('prescription')">
        <div class="gridItem">
          <img src="../assets/sidebarLogos/PrescriptionIcon.png" id="smallIcon">
          <h1 id="sectionHeading">Prescriptions</h1>
          <p>View & add prescriptions.</p>
        </div>
        </button>
        <button class="gridItemButton" @click="$router.push('medical')">
        <div class="gridItem">
          <img src="../assets/sidebarLogos/HistoryIcon.png" id="smallIcon">
          <h1 id="sectionHeading">Medical History</h1>
          <p>View & add to your medical history.</p>
        </div>
        </button>
        <button class="gridItemButton" @click="$router.push('doctor')">
        <div class="gridItem">
          <img src="../assets/sidebarLogos/DoctorIcon.png" id="smallIcon">
          <h1 id="sectionHeading">Doctors</h1>
          <p>View your doctors.</p>
        </div>
        </button>
      </div>
    </div>

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

<style land="scss" scoped>
  .home {
    /*color: white;*/
    padding: 20px;
    margin-left: 130px;/*account for sidebar*/
  }
  #sectionHeading {
    display: inline;
  }
  #smallIcon {
    height: 25px;
    width: auto;
  }
  .topGrid {
    display: grid;
    grid-template-rows: 1fr;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    margin-bottom: 60px;
  }
  .container {
    margin-left: auto;
    margin-right: auto;
    justify-content: center;
    min-width: 650px;
    max-width: 900px
  }
  .grid {
    display: grid;
    justify-content: space-between;
    align-content: stretch;
    gap: 30px;
    grid-template-rows: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
  }
  .topGridItem{
    align-self: center;
  }
  .gridItem{
    background: #d2fdff;
    color: #303c6c;
    margin: 5px;
  }
  .gridItemButton {
    background: #b4dfe5;
    border: none;
    cursor: pointer;
    /*min-width: 300px;*/
  }
  #LoginRegisterLink {
    color: #FFFFFF
  }
</style>
