<template>
  <div class="prescription">
    <h1>This is the prescription page TEST</h1>
    <b-container class="bv-example-row">
      <b-row>
        <b-col><PrescriptionAddCard /></b-col>
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
// @ is an alias to /src
import PrescriptionAddCard from '../components/PrescriptionAddCard.vue';

export default {
  name: 'Prescription',
  components: {
    PrescriptionAddCard
  },
};
</script>