<template>
  <div class="doctor">
    <Sidebar/>
    <h1>This is the doctor page</h1>
    <b-container class="bv-example-row">
      <b-row>

        <b-col class = "l-col">
      <b-alert
    :show="dismissCountDown"
    dismissible
    variant="success"
    @dismissed="dismissCountDown=0"
    @dismiss-count-down="countDownChanged"
  >
    Success! Doctor information changed. Alert will close in {{ dismissCountDown }} seconds...
  </b-alert>
  <!-- <ButtonBlock @click.native="getDoctor" buttonBlockText="Get Doctor"/> -->
  <!-- <b-button @click="showAlert" variant="info" class="m-1">
    Show alert with count-down timer
  </b-button> -->

          <DoctorViewCard @success-alert="showAlert" ref="doctor"/>
        </b-col>
        <!-- <b-col> -->
            <DoctorAddCard @success-alert="showAlert"/>
        <!-- </b-col> -->
      </b-row>


    </b-container>
  </div>
</template>

<style lang="scss" scoped>

.doctor {
  color: white;
  padding: 20px;
  margin-left: 130px;/*account for sidebar*/
}


</style>

<script>
// @ is an alias to /src
import ButtonBlock from '../components/ButtonBlock.vue';
import DoctorAddCard from '../components/DoctorAddCard.vue';
import DoctorViewCard from '../components/DoctorViewCard.vue';
import Sidebar from '../components/Sidebar.vue';
import axios from 'axios';

export default {
  name: 'Doctor',
  components: {
    DoctorAddCard,
    DoctorViewCard,
    ButtonBlock,
    Sidebar
  },
  data() {
      return {
        dismissSecs: 5,
        dismissCountDown: 0
      }
    },

  mounted() {
    // Reroutes to the home page if not logged in, doesn't allow access to doctors.
    if (!(this.$session.exists("sessionID"))){
      this.$router.push({path: '/'});
    }
  },

  methods: {
      countDownChanged(dismissCountDown) {
        this.dismissCountDown = dismissCountDown
      },
      showAlert() {
        this.dismissCountDown = this.dismissSecs
        this.$refs.doctor.getDoctors()
      }
    },

};
</script>
