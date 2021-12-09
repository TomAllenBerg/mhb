<template>

<b-modal id="modal-1" title="Add new prescription" modal-class="modal-background-color" @hide="resetInfoModal">

   <div class="prescription-add-form">

       <form id="prescriptionAddForm" action="" method="addPost">
        <b-container class="fields">
          <div class="wrap">
        <b-row class="noHorizScroll">
        <b-col>



          <!-- <b-row>
          <b-col> -->
          <b-form-group has-error>
            <label for="Prescription Name"><strong>Prescription Name</strong></label>
            <input type="text" class="form-control" v-model="prescription.name">
            <div class="invalid-feedback"></div>
          </b-form-group>
          <!-- </b-col>
          </b-row>

          <b-row>
          <b-col> -->
          <div class="flexBox">
            <b-form-group has-error>
              <label for="Dosage"><strong>Amount</strong></label>
              <input type="text" class="form-control" v-model="prescription.dosage_amt">
              <div class="invalid-feedback"></div>
            </b-form-group>
            <b-form-group has-error>
              <label for="unit"><strong>Unit</strong></label><br>
              <select class="form-select" v-model="prescription.dosage_unit" aria-label="multiple select example">
                <option selected>select</option>
                <option value="1">kg</option>
                <option value="2">g</option>
                <option value="3">mg</option>
                <option value="4">mcg</option>
                <option value="5">L</option>
                <option value="6">mL</option>
                <option value="7">cc</option>
                <option value="8">tablets</option>
                <option value="9">drops</option>
              </select>
            </b-form-group>
          </div>

          <div class="flexBox">
            <b-form-group has-error>
              <label for="PrescribedBy"><strong>Prescribed By</strong></label><br>
              <select class="form-select" aria-label="multiple select example" v-model="prescription.doctor">
                <option selected>None</option>
                <option v-for="doctor in doctors" v-if="doctor.UUID === sessionID" v-bind:value="doctor.name">{{ doctor.name }}</option>
                <!-- <option selected>select</option> -->
                <!-- <option value="1">Doctor 1</option>
                <option value="2">Doctor 2</option>
                <option value="3">Doctor 3</option> -->
              </select>
            </b-form-group>

            <b-form-group has-error>
              <label for="route"><strong>Route</strong></label><br>
              <select class="form-select" v-model="prescription.route" aria-label="multiple select example">
                <option selected>select</option>
                <option value="1">Oral</option>
                <option value="2">Subcutaneous Injection</option>
                <option value="3">Intramuscular Injection</option>
                <option value="4">Intravenous Injection</option>
                <option value="5">Inhalation</option>
                <option value="6">Ocular</option>
                <option value="7">Topical</option>
              </select>
            </b-form-group>
          </div>

          <!-- </b-col>
          <b-col> -->

          <!-- </b-row>
          </b-col>
          </b-row>

          <b-row>
          <b-col> -->
          <b-form-group has-error>
            <label for="exampleFormControlTextarea1"><strong>Instructions</strong></label>
            <textarea class="form-control" v-model="prescription.instructions" id="exampleFormControlTextarea1" rows="3"></textarea>
           </b-form-group>
          <!-- </b-col>
          </b-row> -->

          <!-- <b-row>
          <b-col> -->
          <b-form-group has-error>
            <label for="exampleFormControlTextarea1"><strong>Side Effects</strong></label>
            <textarea class="form-control" v-model="prescription.side_effects" id="exampleFormControlTextarea1" rows="3"></textarea>
          </b-form-group>
          <!-- </b-col>
          </b-row> -->
          <b-form-group has-error>
            <label for="refillDate"><strong>Refill Date</strong></label>
            <b-form-datepicker id="example-datepicker" name="refillDate" v-model="prescription.refill" class="mb-2"></b-form-datepicker>
          </b-form-group>

          <b-form-group has-error>
            <label for="pharmacy"><strong>Pharmacy Name</strong></label>
            <input type="text" class="form-control" name="pharmacy" v-model="prescription.pharmacy">
            <div class="invalid-feedback"></div>
          </b-form-group>

          <b-form-group has-error>
            <label for="location"><strong>Pharmacy Location</strong></label>
            <input type="text" class="form-control" name="location" v-model="prescription.location">
            <div class="invalid-feedback"></div>
          </b-form-group>

          <b-form-group has-error>
            <label for="phone"><strong>Pharmacy Phone Number</strong></label>
            <input type="text" class="form-control" name="phone" v-model="prescription.phone">
            <div class="invalid-feedback"></div>
          </b-form-group>




        <!-- </b-col>

        <b-col> -->
          <!-- <b-row> -->

          <!-- </b-row> -->

          <!-- <b-row>

          </b-row> -->
        </b-col>

        </b-row>
      </div>
      <hr>
        <b-row class="mt-1">
          <b-button class="mr-2 leftMargin" @click="$bvModal.hide('modal-1')">Cancel</b-button>
          <ButtonBlock @click.native="addPost" buttonBlockText="Add Prescription"/>
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
import axios from 'axios'

export default {
  name: "PrescriptionAddCard",
  components: {
    ButtonBlock,
    Input
  },

  data() {
   return {
     prescription:{
       name:" ",
       dosage_amt:" ",
       dosage_unit:" ",
       route:" ",
       instructions:" ",
       side_effects:" ",
       refill:" ",
       pharmacy:" ",
       location:" ",
       phone:" ",
       doctor:" ",
       UUID: this.$session.get("sessionID") // Sets the UUID associated with the pre. to the current user logged in.
     },
     doctors: [],
     sessionID: this.$session.get("sessionID"),
		selected:{
			doctor:''
		}
   }
 },
 mounted() {
           this.getDoctors();
},

 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/prescription/store';
     this.axios.post(uri, this.prescription).then((response) => {
       // this.$router.push({name: 'Prescription'});
       // this.modalShow = false
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
       // this.dismissCountDown = this.dismissSecs
     }).catch(function(error) {
        console.log(error.response.data);
      });
   },
   resetInfoModal() {
        this.prescription.side_effects = '';
        this.prescription.route = '';
        this.prescription.instructions = '';
        this.prescription.dosage_unit = '';
        this.prescription.dosage_amt = '';
        this.prescription.name = '';
        this.prescription.refill = '';
        this.prescription.pharmacy = '';
        this.prescription.location = '';
        this.prescription.phone = '';
        this.prescription.doctor = '';
  },
  getDoctors() {
      axios.get('/api/doctors').then(response => {
        this.doctors = response.data
      })
    .catch( resonse => {
        console.log('error');
    })
  }
 }

};
</script>

<style lang="scss" scoped>
.wrap {
  width: 100%;
  max-height: 65vh;
  overflow-y: scroll;
}

.noHorizScroll {
  width: 100%;
}

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

::seep .close {
  opacity: 1;
  color: #fff;
}

.prescription-add-form {
		width: auto;
    margin: 10px;
	}

.prescription-add-form form {
    background-color: #fbe8a6;
    color: #303c6c;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 10px;

}
.prescription-add-form h2 {
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
