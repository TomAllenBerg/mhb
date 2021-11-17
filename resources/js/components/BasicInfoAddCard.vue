<template>
<div>
  <!-- <div class="center"> -->
   <div class="basic-add-form">
    <div id="disabledWrapper">
       <form id="basicAddForm" action="" method="post">
       <b-form-group has-error>
         <h3>Personal Information</h3>
         <label for="Full Name"><strong>Full Name</strong></label>
         <Input/>
         <div class="invalid-feedback">
         </div>
       </b-form-group>
            <b-form-group has-error>
              <label for="Date of Birth"><strong>Date of Birth</strong></label>
               <Input />
            </b-form-group>
            <b-form-group has-error>
            <label for="Blood Type"><strong>Blood Type</strong></label>
            <Input/>
              <div class="invalid-feedback">
              </div>
          </b-form-group>
            <b-form-group has-error>
               <div>
                <label class="typo__label">Select Your Allergies</label>
                 <multiselect v-model="value" :options="options" :multiple="true" group-values="allergy" group-label="type" :group-select="true" placeholder="Type to search for your allergies" track-by="name" label="name"><span slot="noResult">Oops! No elements found. Consider changing the search query.</span></multiselect>
                  <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
               <pre class="language-json"><code>{{ value  }}</code></pre>
              </div>
            </b-form-group>
            <br><br>
             <ButtonBlock  buttonBlockText="Submit Info" />
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
Vue.component('multiselect', Multiselect);
export default {
        data(){
            return{
                value: null,
                options: [
                  {
                    type: 'Animal Allergies',
                    allergy: [
                       {id: 'allergy1', name: 'Dog Allergy'},
                      {id: 'allergy2', name: 'Cat Allergy'},
                  ]
                  },
                  {
                    type: 'Food Allergies',
                    allergy: [
                      {id: 'allergy3', name: 'Fish Allergy'},
                      {id: 'allergy4', name: 'Red Meat Allergy'},
                    ]
                  },
                  ],
            }
        },
  name: "BasicInfoAddCard",
  components: {
    ButtonBlock,
    Input,
    ConditionsAddCard,
    Multiselect,
  },
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss" scoped>
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
