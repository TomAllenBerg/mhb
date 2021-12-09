<template>

<b-modal id="modal-1" title="Add new doctor" modal-class="modal-background-color" @hide="resetInfoModal">

   <div class="doctor-add-form">

       <form id="doctorAddForm" action="" method="addPost">
        <b-container class="fields">
        <b-row>
        <b-col>


          <!-- <b-row>
          <b-col> -->
          <b-form-group has-error>
            <label for="Doctor Name"><strong>Doctor Name</strong></label>
            <input type="text" class="form-control" v-model="doctor.name">
            <div class="invalid-feedback"></div>
          </b-form-group>
          <!-- </b-col>
          </b-row>

          <b-row>
          <b-col> -->
          <b-form-group has-error>
            <label for="Specialty"><strong>Specialty</strong></label>
            <input type="text" class="form-control" v-model="doctor.specialty">
            <div class="invalid-feedback"></div>
          </b-form-group>
          <b-form-group has-error>
            <label for="Doctor Name"><strong>Location</strong></label>
            <input type="text" class="form-control" v-model="doctor.location">
            <div class="invalid-feedback"></div>
          </b-form-group>

        </b-col>

        </b-row>

        <b-row>
          <b-button class="mr-2 leftMargin" @click="$bvModal.hide('modal-1')">Cancel</b-button>
          <ButtonBlock @click.native="addPost" buttonBlockText="Add Doctor"/>
        </b-row>

        </b-container>
      </form>
      </div>
</b-modal>
</template>

<script>
// @ is an alias to /src
import ButtonBlock from '../components/ButtonBlock.vue';
import Input from '../components/Input.vue';
import axios from 'axios';

export default {
  name: "DoctorAddCard",
  components: {
    ButtonBlock,
    Input
  },

  data() {
   return {
     doctor:{
       name:" ",
       specialty:" ",
       location:" ",
       UUID: this.$session.get("sessionID") // Sets the UUID associated with the doctor to the current user logged in.
     }
   }
 },

 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/doctor/store';
     this.axios.post(uri, this.doctor).then((response) => {
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
       // this.$root.$on('component1', () => {
       //      // your code goes here
       //      this.getDoctors()
       //  }
       // this.dismissCountDown = this.dismissSecs
     }).catch(function(error) {
        console.log(error.response.data);
      });
   },
   resetInfoModal() {
        this.doctor.name = '';
        this.doctor.specialty = '';
        this.doctor.location = '';
  },

 }

};
</script>

<style lang="scss" scoped>
.flexBox {
  display: flex;
  justify-content: space-between;
  align-items:center;
}

.leftMargin {
  margin-left: 15px;
}
h3 {
  font-size: 1.9rem;
}

::v-deep .modal-content {
  background-color: #303c6c !important;
}

::v-deep .modal-title {
  color: white;
}

::v-deep .modal-footer {
  display: none;
}

::v-deep .close {
  opacity: 1;
  color: #fff;
}

.doctor-add-form {
		width: auto;
    margin: 10px;
	}

.doctor-add-form form {
    background-color: #fbe8a6;
    color: #303c6c;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 10px;

}
.doctor-add-form h2 {
    margin: 0 0 15px;
}
// .form-control, .btn {
//     min-height: 38px;
//     border-radius: 2px;
// }
// .btn {
//     font-size: 15px;
//     font-weight: bold;
// }



label {
  margin-bottom: 0.1em;
  // float: left;
}

.invalid-feedback {
	display: block !important;
}

</style>
