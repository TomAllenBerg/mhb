<template>
    <div class="colorWrapper">
      <div class="flex">
        <h3>Current Prescriptions</h3>
        <b-button v-b-modal.modal-1><i class="fas fa-plus"></i> Add prescription</b-button>
      </div>

      <b-container class="bv-example-row">
        <b-row>
          <b-col><PrescriptionInfo /></b-col>
        </b-row>
        <b-row>
          <b-col><PrescriptionInfo /></b-col>
        </b-row>
        <b-row>
          <b-col><PrescriptionInfo /></b-col>
        </b-row>
      </b-container>
    </div>
</template>

<script>
// @ is an alias to /src
import PrescriptionInfo from '../components/PrescriptionInfo.vue';

export default {
  name: "PrescriptionViewCard",
  components: {
    PrescriptionInfo
  }
};
</script>

<style lang="scss" scoped>
.flex {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
}

h3 {
  font-size: 1.9rem;
}

.row {
   text-align: left;
}

.colorWrapper {
  background: #d2fdff;
  color: #303c6c;
  position: absolute;
  left: 0%;
  right: 0%;
  padding: 1.5em;
  margin: auto;
}

.row {
  padding: .5em;
}
</style>
