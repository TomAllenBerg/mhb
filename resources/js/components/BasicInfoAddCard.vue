<template>
<div>
  <!-- <div class="center"> -->
   <div class="basic-add-form">
    <div id="disabledWrapper">
       <form id="basicAddForm" action="" method="post">
       <b-form-group has-error>
         <h3>Personal Information</h3>
         <label for="Full Name"><strong>Full Name</strong></label>
         <input type="text" class="form-control darkBlueInput" v-model="medical.name">
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
              <ButtonBlock @click.native="addPost" buttonBlockText="Submit"/>  
              <br>
            <b-form-group has-error>
               <div>
                 <multiselect v-model="allergy.allergies" :options="allergies" :multiple="true" group-values="allergy" group-label="type" :group-select="true" placeholder="Type to search for your allergies" ><span slot="noResult">Oops! No elements found. Consider changing the search query.</span></multiselect>
                  <template slot="selection" slot-scope="{ values, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
                  <br> <ButtonBlock @click.native="addPost2" buttonBlockText="Submit Allergies"/>
              </div>
              <br>
               <div>
                <multiselect v-model="condition.conditions" :options="conditions" :multiple="true" group-values="condition" group-label="type" :group-select="true" placeholder="Type to search for your medical conditions"><span slot="noResult">Oops! No elements found. Consider changing the search query.</span></multiselect>
                <template slot="selection" slot-scope="{ values, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
               <br> <ButtonBlock @click.native="addPost3" buttonBlockText="Submit Conditions"/>
               </div>
            </b-form-group>
      </form>
      </div>
    </div>
   </div>
</template>

<script>
// @ is an alias to /src
import ButtonBlock from '../components/ButtonBlock.vue';
import Input from '../components/Input.vue';
import Multiselect from 'vue-multiselect';
import axios from 'axios'
Vue.component('multiselect', Multiselect);
export default {
  name: "BasicInfoAddCard",
  components: {
    ButtonBlock,
    Input,
    Multiselect,
  },
        data(){
            return {
              medical:{
              name:" ",
              dob:" ",
              UUID: this.$session.get("sessionID") // Sets the UUID associated with the basic info to the current user logged in.
              },
              allergy:{
                allergies:[],
                UUID: this.$session.get("sessionID") // Sets the UUID associated with the allergy to the current user logged in.
              },
              condition:{
                conditions:[],
                UUID: this.$session.get("sessionID") // Sets the UUID associated with the condition to the current user logged in.
              },
              conditions: [
                  {
                    type: 'Medical Conditions',
                    condition: [
                        'Amyotrophic Lateral Sclerosis (ALS)',
                        'Arrhythmia',
                        'Arthritis',
                        'Atrial Fibrillation',
                        'Autism',
                        'Cataracts',
                        'Cholesterol',
                        'Chronic Pain',
                        'Chronic Kidney Disease',
                        'Chronic Obstructive Pulmonary Disease (COPD)',
                        'Congestive Heart Failure',
                        'Diabetes',
                        'Fibromyalgia',
                        'Fibroids',
                        'Heart Disease',
                        'Hepatitis',
                        'HIV/AIDS',
                        'Hypothyroidism',
                        'IBS (Irritable Bowel Syndrome)',
                        'Incontinence and OAB (Overactive Bladder)',
                        'Inflammatory Bowel Disease (IBD)',
                        'Influenza',
                        'Insulin Resistance',
                        'Leukemia',
                        'Liver Failure',
                        'Lupus',
                        'Macular degeneration',
                        'Multiple Sclerosis',
                        'Osteoarthritis',
                        'Osteoporosis',
                        'Parkinson’s Disease',
                        'Quadriplegia',
                        'Restless Leg Syndrome',
                        'Rheumatoid Arthritis',
                        'Spina Bifida',
                        'Transient Ischemic Attack (TIA)',
                        'Ulcerative Colitis',
                    ]
                  },
                  {
                    type: 'Cancer',
                    condition: [
                        'Acute Lymphoblastic Leukemia (ALL)',
                        'Acute Myeloid Leukemia (AML)',
                        'Kaposi Sarcoma (Soft Tissue Sarcoma)',
                        'AIDS-Related Lymphoma (Lymphoma)',
                        'Primary CNS Lymphoma (Lymphoma)',
                        'Anal Cancer',
                        'Basal Cell Carcinoma',
                        'Bile Duct Cancer',
                        'Bladder Cancer',
                         'Bone Cancer (includes Ewing Sarcoma and Osteosarcoma and Malignant Fibrous Histiocytoma)',
                         'Brain Tumors',
                         'Breast Cancer',
                         'Bronchial Tumors (Lung Cancer)',
                         'Burkitt Lymphoma',
                         'Carcinoid Tumor (Gastrointestinal)',
                         'Cardiac (Heart) Tumors',
                         'Cervical Cancer',
                         'Chronic Lymphocytic Leukemia (CLL)',
                         'Chronic Myelogenous Leukemia (CML)',
                         'Chronic Myeloproliferative Neoplasms',
                         'Colorectal Cancer',
                         'Cutaneous T-Cell Lymphoma',
                         'Ductal Carcinoma In Situ (DCIS)',
                         'Endometrial Cancer (Uterine Cancer)',
                         'Esophageal Cancer',
                         'Esthesioneuroblastoma (Head and Neck Cancer)',
                         'Ewing Sarcoma (Bone Cancer)',
                         'Extragonadal Germ Cell Tumor',
                         'Intraocular Melanoma',
                         'Retinoblastoma',
                         'Fallopian Tube Cancer',
                         'Gallbladder Cancer',
                         'Gastric (Stomach) Cancer',
                         'Gastrointestinal Carcinoid Tumor',
                         'Gastrointestinal Stromal Tumors (GIST) (Soft Tissue Sarcoma)',
                         'Gestational Trophoblastic Disease',
                         'Hairy Cell Leukemia',
                         'Head and Neck Cancer',
                         'Hepatocellular (Liver) Cancer',
                         'Histiocytosis, Langerhans Cell',
                         'Hodgkin Lymphoma',
                         'Hypopharyngeal Cancer (Head and Neck Cancer)',
                         'Intraocular Melanoma',
                         'Islet Cell Tumors, Pancreatic Neuroendocrine Tumors',
                         'Kaposi Sarcoma (Soft Tissue Sarcoma)',
                         'Kidney (Renal Cell) Cancer',
                         'Langerhans Cell Histiocytosis',
                         'Laryngeal Cancer (Head and Neck Cancer)',
                         'Lip and Oral Cavity Cancer (Head and Neck Cancer)',
                         'Liver Cancer',
                         'Lung Cancer',
                         'Lymphoma',
                         'Male Breast Cancer',
                         'Melanoma',
                         'Merkel Cell Carcinoma (Skin Cancer)',
                         'Mesothelioma, Malignant',
                         'Metastatic Cancer',
                         'Midline Tract Carcinoma With NUT Gene Changes',
                         'Multiple Endocrine Neoplasia Syndromes',
                         'Multiple Myeloma/Plasma Cell Neoplasms',
                         'Nasal Cavity and Paranasal Sinus Cancer',
                         'Nasopharyngeal Cancer',
                         'Oral Cancer, Lip and Oral Cavity Cancer and Oropharyngeal Cancer',
                         'Osteosarcoma and Undifferentiated Pleomorphic Sarcoma of Bone Treatment',
                         'Ovarian Cancer',
                         'Pancreatic Cancer',
                         'Paraganglioma',
                         'Parathyroid Cancer',
                         'Penile Cancer',
                         'Pharyngeal Cancer ',
                         'Pheochromocytoma',
                         'Pituitary Tumor',
                         'Plasma Cell Neoplasm/Multiple Myeloma',
                         'Primary Central Nervous System (CNS) Lymphoma',
                         'Primary Peritoneal Cancer',
                         'Prostate Cancer',
                         'Rectal Cancer',
                         'Renal Cell (Kidney) Cancer',
                         'Retinoblastoma',
                         'Salivary Gland Cancer',
                         'Ewing Sarcoma (Bone Cancer)',
                         'Kaposi Sarcoma (Soft Tissue Sarcoma)',
                         'Osteosarcoma (Bone Cancer)',
                         'Soft Tissue Sarcoma',
                         'Uterine Sarcoma',
                         'Skin Cancer',
                         'Small Intestine Cancer',
                         'Soft Tissue Sarcoma',
                         'Thyroid Cancer',
                         'Tracheobronchial Tumors',
                         'Urethral Cancer',
                         'Uterine Cancer, Endometrial',
                         'Uterine Sarcoma',
                         'Vaginal Cancer',
                         'Vascular Tumors (Soft Tissue Sarcoma)',
                         'Vulvar Cancer',
                    ]
                  },
                  {
                    type: 'Heart Conditions',
                    condition: [
                       'Coronary heart disease', 
                       'Angina', 
                       'Unstable angina', 
                       'Heart failure', 
                       'Arrhythmia (abnormal heart rhythms)', 
                       'Valve disease ', 
                       'High blood pressure', 
                       'Congenital heart conditions',
                       'Pericardial disease', 
                        'Peripheral vascular disease', 
                        'Rheumatic heart disease', 
                        'Stroke', 
                        'Vascular disease (blood vessel disease)', 
                        'Deep Vein Thrombosis and Pulmonary Embolism', 
                        'Aortic stenosis', 
                        'Mitral valve insufficiency',
                    ]
                  },
                  {
                    type: 'Congenital disorders',
                    condition: [
                       'cleft lip and cleft palate', 
                       'congenital heart disease ', 
                       'cerebral palsy', 
                       'Fragile X syndrome', 
                       'Down syndrome', 
                       'spina bifida', 
                       'cystic fibrosis', 
                       'Cleft lip alone',
                       'Cleft palate alone', 
                       'Talipes equinovarus', 
                       'Reduction defects of upper and lower limbs (longitudinal, transverse, and intercalary)', 
                       'Exomphalos (omphalocele)', 
                       'Gastroschisis', 
                       'Hypospadias', 
                       'Microtia/Anotia', 
                       'Anencephaly',
                       'Craniorachischisis', 
                       'Iniencephaly', 
                       'Encephalocele', 
                    ],
                  },
                ],
                allergies: [
                  {
                    type: 'Animal Allergies',
                    allergy: [
                      'Dog',
                      'Cat',
                      'Rabbit',
                      'Small Rodent',
                  ]
                  },
                  {
                    type: 'Insect Allergies',
                    allergy: [
                      'Bee',
                      'Wasp',
                      'Hornet',
                      'Yellow-Jacket',
                      'Mosquitos',
                      'Bed Bugs',
                      'Fleas',
                      'Cockroaches',
                    ]
                    
                  },
                   {
                    type: 'Other Allergies',
                    allergy: [
                      'Dust',
                      'Mold',
                      'Pollen',
                      'Latex',
                    ]
                  },
                  {
                    type: 'Food Allergies',
                    allergy: [
                      'Fish',
                      'Red Meat',
                      'Milk',
                      'Egg',
                      'Peanut',
                      'Tree nut',
                      'Soy',
                      'Wheat',
                      'Shell Fish',
                       'Banana',
                       'Linseed',
                       'Sesame seed',
                       'Avocado',
                       'Kiwi fruit',
                       'Garlic',
                    ]
                  },
                  {
                    type: 'Drug Allergies',
                    allergy: [
                      'Amoxicillin',
                      'Ampicillin',
                      'penicillin ',
                      'tetracycline',
                      'ibuprofen',
                      'naproxen',
                      'Aspirin ',
                      'Sulfa drugs',
                      'Chemotherapy drugs',
                       'cetuximab (Erbitux)',
                       'rituximab ',
                       'abacavir (Ziagen) ',
                       'nevirapine (Viramune)',
                       'Insulin',
                       'carbamazepine (Tegretol)',
                       'lamotrigine (Lamictal)',
                       'phenytoin',
                       'atracurium',
                       'succinylcholine',
                       'vecuronium',
                    ]
                  }
                  ],
            } 
        },

 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/medical_history/store';
     this.axios.post(uri, this.medical).then((response) => {
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
     }).catch(function(error) {
        console.log(error.response.data);
      });
   },
   addPost2(){
     let uri = '/api/allergies/store';
     //let array = Object.values(this.allergy)
     this.axios.post(uri, this.allergy).then((response) => {
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
     }).catch(function(error) {
        console.log(error.response.data);
      });
   },
     addPost3(){
     let uri = '/api/conditions/store';
     //let array = Object.values(this.condition)
     this.axios.post(uri, this.condition).then((response) => {
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
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
