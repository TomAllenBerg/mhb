<template>
  <div class="prescription">
    <Sidebar/>
    <h1>This is the prescription page</h1>
    <b-container class="bv-example-row">
      <b-alert
    :show="dismissCountDown"
    dismissible
    variant="success"
    @dismissed="dismissCountDown=0"
    @dismiss-count-down="countDownChanged"
  >
    Success! Prescription info changed. Alert will close in {{ dismissCountDown }} seconds...
  </b-alert>
  <!-- <b-button @click="showAlert" variant="info" class="m-1">
    Show alert with count-down timer
  </b-button> -->
      <b-row>

        <b-col class = "l-col">
          <b-row><PrescriptionViewCard @success-alert="showAlert" @refill="refillCard" ref="doctor"/></b-row>
        </b-col>
        <b-col>



            <b-row><PrescriptionAddCard @success-alert="showAlert"/></b-row>

          <b-row><RefillCard ref="refill"/></b-row>
        </b-col>
      </b-row>


    </b-container>
  </div>
</template>

<style lang="scss" scoped>

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
  data() {
      return {
        dismissSecs: 5,
        dismissCountDown: 0
      }
    },

  mounted() {
    // Reroutes to the home page if not logged in, doesn't allow access to prescriptions.
    /*
    if (!(this.$session.exists("sessionID"))){
      this.$router.push({path: 'login'});
    }
    */
  },

  methods: {
      countDownChanged(dismissCountDown) {
        this.dismissCountDown = dismissCountDown
      },
      showAlert() {
        this.dismissCountDown = this.dismissSecs
        this.$refs.doctor.getPrescriptions()
      },
      refillCard(id) {
        // alert("REFILL!");
        this.$refs.refill.refillInfo(id)
      }
  }
  
};
</script>
