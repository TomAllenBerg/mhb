<template>
  <div class="prescription">
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
// @ is an alias to /src
import LoginCard from '../components/LoginCard.vue';

export default {
  name: 'Prescription',
  components: {
    LoginCard
  },
};
</script>