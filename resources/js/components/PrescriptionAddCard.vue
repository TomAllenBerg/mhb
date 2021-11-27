<template>
   <div class="prescription-add-form">

       <form id="prescriptionAddForm" action="" method="addPost">
        <b-container class="fields">
        <b-row>
        <b-col>
          <b-row>
          <b-col>
          <b-form-group has-error>
            <label for="Prescription Name"><strong>Prescription Name</strong></label>
            <input type="text" class="form-control" v-model="prescription.name">
            <div class="invalid-feedback"></div>
          </b-form-group>
          </b-col>
          </b-row>

          <b-row>
          <b-col>
          <b-form-group has-error>
            <label for="Dosage"><strong>Amount</strong></label>
            <input type="text" class="form-control" v-model="prescription.dosage_amt">
            <div class="invalid-feedback"></div>
          </b-form-group>
          </b-col>
          <b-col>
          <b-row>
          <select class="form-select" v-model="prescription.dosage_unit" aria-label="multiple select example">
            <option selected>select</option>
            <option value="0">kg</option>
            <option value="1">g</option>
            <option value="2">mg</option>
            <option value="3">mcg</option>
            <option value="4">L</option>
            <option value="5">mL</option>
            <option value="6">cc</option>
            <option value="7">tablets</option>
            <option value="8">drops</option>
          </select>
          </b-row>
          <b-row>
          <select class="form-select" v-model="prescription.route" aria-label="multiple select example">
            <option selected>select</option>
            <option value="0">Oral</option>
            <option value="1">Subcutaneous Injection</option>
            <option value="2">Intramuscular Injection</option>
            <option value="3">Intravenous Injection</option>
            <option value="4">Inhalation</option>
            <option value="5">Ocular</option>
            <option value="6">Topical</option>
          </select>
          </b-row>
          </b-col>
          </b-row>

          <b-row>
          <b-col>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Instructions</label>
            <textarea class="form-control" v-model="prescription.instructions" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          </b-col>
          </b-row>

          <b-row>
          <b-col>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Side Effects</label>
            <textarea class="form-control" v-model="prescription.side_effects" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          </b-col>
          </b-row>
        
          
        </b-col>

        <b-col>
          <b-row>
          <label for="PrescribedBy"><strong>Prescribed By</strong></label><br>
          <select class="form-select" aria-label="multiple select example">
            <option value="1">Doctor 1</option>
            <option value="2">Doctor 2</option>
            <option value="3">Doctor 3</option>
          </select>
          </b-row>

          <b-row>

          </b-row>
        </b-col>

        </b-row>
        
        <b-row>
          <ButtonBlock @click.native="addPost" buttonBlockText="Add Prescription"/>
        </b-row>

        </b-container>
      </form>
      </div>

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
       side_effects:" "
     }   
   }
 },
 
 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/prescription/store';
     this.axios.post(uri, this.prescription).then((response) => {
       this.$router.push({name: 'prescription'});
     }).catch(function(error) {
        console.log(error.response.data);
      });
   }
 }

};
</script>

<style lang="scss" scoped>
h3 {
  font-size: 1.9rem;
}

.prescription-add-form {
		width: 640px;
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
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {
    font-size: 15px;
    font-weight: bold;
}



label {
  margin-bottom: 0.1em;
  float: left;
}

.invalid-feedback {
	display: block !important;
}

</style>
