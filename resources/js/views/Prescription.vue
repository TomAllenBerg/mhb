<template>
  <div class="prescription">
    <Sidebar/>
    <h1>This is the prescription page</h1>
    <b-container class="bv-example-row">
      <b-row>
        <b-col class = "l-col">
          <b-row><PrescriptionViewCard /></b-row>
        </b-col>
        <b-col>
          <b-row><PrescriptionAddCard /></b-row>
          <b-row><RefillCard /></b-row>
        </b-col>
      </b-row>
        
      
    </b-container>
  </div>
</template>

<style>

.prescription {
  color: white;
  padding: 20px;
  margin-left: 130px;/*account for sidebar*/
}


</style>

<script>
// @ is an alias to /src
import PrescriptionAddCard from '../components/PrescriptionAddCard.vue';
import PrescriptionViewCard from '../components/PrescriptionViewCard.vue';
import RefillCard from '../components/RefillCard.vue';
import Sidebar from '../components/Sidebar.vue'

export default {
  name: 'Prescription',
  components: {
    PrescriptionAddCard,
    PrescriptionViewCard,
    RefillCard,
    Sidebar
  },
};
</script>