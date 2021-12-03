<template>
<div>
  <!-- <div class="center"> -->
   <div class="basic-add-form">
    <div id="disabledWrapper">
       <form id="basicAddForm" action="" method="post">
       <b-form-group has-error>
         <h3>Personal Information</h3>
         <label for="Full Name"><strong>Full Name</strong></label>
         <input type="text" class="form-control darkBlueInput" v-model="medical.fullName">
         <div class="invalid-feedback">
         </div>
       </b-form-group>
            <b-form-group has-error>
              <label for="Date of Birth"><strong>Date of Birth</strong></label>
                <input type="text" class="form-control darkBlueInput" v-model="medical.DOB">
            </b-form-group>
            <b-form-group has-error>
            <label for="Blood Type"><strong>Blood Type</strong></label>
             <input type="text" class="form-control darkBlueInput" v-model="medical.bloodType">
              <div class="invalid-feedback">
              </div>
          </b-form-group>
            <b-form-group has-error>
               <div>
                <!-- <label class="typo__label">Select Your Allergies</label> -->
                 <multiselect v-model="value" :options="options" :multiple="true" group-values="allergy" group-label="type" :group-select="true" placeholder="Type to search for your allergies" track-by="name" label="name"><span slot="noResult">Oops! No elements found. Consider changing the search query.</span></multiselect>
                  <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
               <!-- <pre class="language-json"><code>{{ value  }}</code></pre> -->
              </div>
              <br>
               <div class="conditions">
                <ConditionsAddCard/>
            </div>
            </b-form-group>
            <br><br>
           <ButtonBlock @click.native="addPost" buttonBlockText="Submit"/>
      </form>
      </div>
    </div>
   </div>
  <!-- </div> -->
</template>

<script>
// @ is an alias to /src
import ButtonBlock from '../components/ButtonBlock.vue';
import Input from '../components/Input.vue';
import ConditionsAddCard from '../components/ConditionsAddCard.vue';
import Multiselect from 'vue-multiselect';
import axios from 'axios'
Vue.component('multiselect', Multiselect);
export default {
  name: "BasicInfoAddCard",
  components: {
    ButtonBlock,
    Input,
    ConditionsAddCard,
    Multiselect,
  },
        data(){
            return {
              medical:{
              full_name:" ",
              dob:" ",
              blood_type:" ",
              allergies:" ",
              conditions: " ",
              },
                options: [
                  {
                    type: 'Animal Allergies',
                    allergy: [
                      {id: 'animal1', name: 'Dog'},
                      {id: 'animal2', name: 'Cat'},
                      {id: 'animal3', name: 'Rabbit'},
                      {id: 'animal4', name: 'Small Rodent'},
                  ]
                  },
                  {
                    type: 'Insect Allergies',
                    allergy: [
                      {id: 'insect1', name: 'Bee'},
                      {id: 'insect2', name: 'Wasp'},
                      {id: 'insect3', name: 'Hornet'},
                      {id: 'insect4', name: 'Yellow-Jacket'},
                      {id: 'insect5', name: 'Mosquitos'},
                      {id: 'insect6', name: 'Bed Bugs'},
                      {id: 'insect7', name: 'Fleas'},
                      {id: 'insect8', name: 'Cockroaches'},
                    ]
                  },
                   {
                    type: 'Other Allergies',
                    allergy: [
                      {id: 'other1', name: 'Dust'},
                      {id: 'other2', name: 'Mold'},
                      {id: 'other3', name: 'Pollen'},
                      {id: 'other4', name: 'Latex'},
                  ]
                  },
                  {
                    type: 'Food Allergies',
                    allergy: [
                      {id: 'food1', name: 'Fish'},
                      {id: 'food2', name: 'Red Meat'},
                      {id: 'food3', name: 'Milk'},
                      {id: 'food4', name: 'Egg'},
                      {id: 'food5', name: 'Peanut'},
                      {id: 'food6', name: 'Tree nut'},
                      {id: 'food7', name: 'Soy'},
                      {id: 'food8', name: 'Wheat'},
                      {id: 'food9', name: 'Shell Fish'},
                      {id: 'food10', name: 'Banana'},
                      {id: 'food11', name: 'Linseed'},
                      {id: 'food12', name: 'Sesame seed'},
                      {id: 'food13', name: 'Avocado'},
                      {id: 'food14', name: 'Kiwi fruit'},
                      {id: 'food15', name: 'Garlic'},
                    ]
                  },
                  {
                    type: 'Drug Allergies',
                    allergy: [
                      {id: 'drug1', name: 'Amoxicillin'},
                      {id: 'drug2', name: 'Ampicillin'},
                      {id: 'drug3', name: 'penicillin '},
                      {id: 'drug4', name: 'tetracycline'},
                      {id: 'drug5', name: 'ibuprofen'},
                      {id: 'drug6', name: 'naproxen'},
                      {id: 'drug7', name: 'Aspirin '},
                      {id: 'drug8', name: 'Sulfa drugs'},
                      {id: 'drug9', name: 'Chemotherapy drugs'},
                      {id: 'drug10', name: 'cetuximab (Erbitux)'},
                      {id: 'drug11', name: 'rituximab '},
                      {id: 'drug12', name: 'abacavir (Ziagen) '},
                      {id: 'drug13', name: 'nevirapine (Viramune)'},
                      {id: 'drug14', name: 'Insulin'},
                      {id: 'drug15', name: 'carbamazepine (Tegretol)'},
                      {id: 'drug16', name: 'lamotrigine (Lamictal)'},
                      {id: 'drug17', name: 'phenytoin'},
                      {id: 'drug18', name: 'atracurium'},
                      {id: 'drug19', name: 'succinylcholine'},
                      {id: 'drug20', name: 'vecuronium'},
                    ]
                  },
                  ],
            } 
        },

 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/prescription/store';
     this.axios.post(uri, this.medical).then((response) => {
       // this.$router.push({name: 'Prescription'});
       // this.modalShow = false
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
       // this.dismissCountDown = this.dismissSecs
     }).catch(function(error) {
        console.log(error.response.data);
      });
   }
 }
 };


            
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss" scoped>
.darkBlueInput {
  border-color: #303c6c;
  border-width: medium;
  background: #b4dfe5;
}

.darkBlueInput:hover {
  background: #b4dfe5;
}

.darkBlueInput:focus {
  border-color: #0062cc;
    box-shadow: 0 0 0 0.2rem rgb(29 102 180 / 50%);
}
h3 {
  font-size: 1.9rem;
}

.basic-add-form {
		width: 340px;
    margin: 3em auto;
	}

.basic-add-form form {
    background-color:#b4dfe5;
    color: #303c6c;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.basic-add-form h2 {
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

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

label {
  margin-bottom: 0.1em;
  float: left;
}

.disabled {
  pointer-events: none;
  background-color: #bbb;
  opacity: 0.5;
    margin-bottom: -200px;
}
.disabledWrapper {
   position: relative;
   cursor: not-allowed;
    background: #d2fdff;

}

.invalid-feedback {
	display: block !important;
}

</style>
