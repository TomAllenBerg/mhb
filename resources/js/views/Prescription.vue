<template>
  <div class="prescription">
    <Sidebar/>
    <h1>This is the prescription page</h1>
    <b-container class="bv-example-row">
      <b-row>
        <b-col><LoginCard /></b-col>
      </b-row>
    </b-container>
  </div>
</template>

<style>
.prescription {
  color: white;
}
</style>

<script>
import LoginCard from '../components/LoginCard.vue';
import Sidebar from '../components/Sidebar.vue'

export default {
  name: 'Prescription',
  components: {
    LoginCard,
    Sidebar
  },
};
</script>