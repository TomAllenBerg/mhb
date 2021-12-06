<template>
    <div class = "ColorWrapper">
     <div>
        <!-- <label class="typo__label">Select Your Medical Conditions</label> -->
        <multiselect v-model="medical.conditions" :options="conditions" :multiple="true" group-values="condition" group-label="type" :group-select="true" placeholder="Type to search for your medical conditions" track-by="Condition" label="Condition"><span slot="noResult">Oops! No elements found. Consider changing the search query.</span></multiselect>
        <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
        <!-- <pre class="language-json"><code>{{ value  }}</code></pre> -->
    </div>
  </div>
</template>

<script>
import Multiselect from 'vue-multiselect';
Vue.component('multiselect', Multiselect);
export default {
        data(){
            return{
                medical:{
                  conditions:" "
                },
                conditions: [
                  {
                    type: 'Medical Conditions',
                    condition: [
                        { Id: 'condition1', Condition: 'Amyotrophic Lateral Sclerosis (ALS)' },
                        { Id: 'condition2', Condition: 'Arrhythmia' },
                        { Id: 'condition3', Condition: 'Arthritis' },
                        { Id: 'condition4', Condition: 'Atrial Fibrillation' },
                        { Id: 'condition5', Condition: 'Autism' },
                        { Id: 'condition7', Condition: 'Cataracts' },
                        { Id: 'condition8', Condition: 'Cholesterol' },
                        { Id: 'condition9', Condition: 'Chronic Pain' },
                        { Id: 'condition10', Condition: 'Chronic Kidney Disease' },
                        { Id: 'condition11', Condition: 'Chronic Obstructive Pulmonary Disease (COPD)' },
                        { Id: 'condition12', Condition: 'Congestive Heart Failure' },
                        { Id: 'condition13', Condition: 'Diabetes' },
                        { Id: 'condition14', Condition: 'Fibromyalgia' },
                        { Id: 'condition15', Condition: 'Fibroids' },
                        { Id: 'condition16', Condition: 'Heart Disease' },
                        { Id: 'condition17', Condition: 'Hepatitis' },
                        { Id: 'condition18', Condition: 'HIV/AIDS' },
                        { Id: 'condition19', Condition: 'Hypothyroidism' },
                        { Id: 'condition20', Condition: 'IBS (Irritable Bowel Syndrome)' },
                        { Id: 'condition21', Condition: 'Incontinence and OAB (Overactive Bladder)' },
                        { Id: 'condition22', Condition: 'Inflammatory Bowel Disease (IBD)' },
                        { Id: 'condition23', Condition: 'Influenza' },
                        { Id: 'condition24', Condition: 'Insulin Resistance' },
                        { Id: 'condition25', Condition: 'Leukemia' },
                        { Id: 'condition26', Condition: 'Liver Failure' },
                        { Id: 'condition27', Condition: 'Lupus' },
                        { Id: 'condition28', Condition: 'Macular degeneration' },
                        { Id: 'condition30', Condition: 'Multiple Sclerosis' },
                        { Id: 'condition31', Condition: 'Osteoarthritis' },
                        { Id: 'condition32', Condition: 'Osteoporosis' },
                        { Id: 'condition33', Condition: 'Parkinson’s Disease' },
                        { Id: 'condition34', Condition: 'Quadriplegia' },
                        { Id: 'condition35', Condition: 'Restless Leg Syndrome' },
                        { Id: 'condition36', Condition: 'Rheumatoid Arthritis' },
                        { Id: 'condition37', Condition: 'Spina Bifida' },
                        { Id: 'condition38', Condition: 'Transient Ischemic Attack (TIA)' },
                        { Id: 'condition39', Condition: 'Ulcerative Colitis' },
                    ]
                  },
                  {
                    type: 'Cancer',
                    condition: [
                        { Id: 'cancer1', Condition: 'Acute Lymphoblastic Leukemia (ALL)' },
                        { Id: 'cancer2', Condition: 'Acute Myeloid Leukemia (AML)' },
                        { Id: 'cancer3', Condition: 'Kaposi Sarcoma (Soft Tissue Sarcoma)' },
                        { Id: 'cancer4', Condition: 'AIDS-Related Lymphoma (Lymphoma)' },
                        { Id: 'cancer5', Condition: 'Primary CNS Lymphoma (Lymphoma)' },
                        { Id: 'cancer6', Condition: 'Anal Cancer' },
                        { Id: 'cancer7', Condition: 'Basal Cell Carcinoma' },
                        { Id: 'cancer8', Condition: 'Bile Duct Cancer' },
                        { Id: 'cancer9', Condition: 'Bladder Cancer' },
                        { Id: 'cancer10', Condition: 'Bone Cancer (includes Ewing Sarcoma and Osteosarcoma and Malignant Fibrous Histiocytoma)' },
                        { Id: 'cancer11', Condition: 'Brain Tumors' },
                        { Id: 'cancer12', Condition: 'Breast Cancer' },
                        { Id: 'cancer13', Condition: 'Bronchial Tumors (Lung Cancer)' },
                        { Id: 'cancer14', Condition: 'Burkitt Lymphoma' },
                        { Id: 'cancer15', Condition: 'Carcinoid Tumor (Gastrointestinal)' },
                        { Id: 'cancer16', Condition: 'Cardiac (Heart) Tumors' },
                        { Id: 'cancer17', Condition: 'Cervical Cancer' },
                        { Id: 'cancer18', Condition: 'Chronic Lymphocytic Leukemia (CLL)' },
                        { Id: 'cancer19', Condition: 'Chronic Myelogenous Leukemia (CML)' },
                        { Id: 'cancer20', Condition: 'Chronic Myeloproliferative Neoplasms' },
                        { Id: 'cancer21', Condition: 'Colorectal Cancer' },
                        { Id: 'cancer22', Condition: 'Cutaneous T-Cell Lymphoma' },
                        { Id: 'cancer23', Condition: 'Ductal Carcinoma In Situ (DCIS)' },
                        { Id: 'cancer24', Condition: 'Endometrial Cancer (Uterine Cancer)' },
                        { Id: 'cancer25', Condition: 'Esophageal Cancer' },
                        { Id: 'cancer26', Condition: 'Esthesioneuroblastoma (Head and Neck Cancer)' },
                        { Id: 'cancer27', Condition: 'Ewing Sarcoma (Bone Cancer)' },
                        { Id: 'cancer28', Condition: 'Extragonadal Germ Cell Tumor' },
                        { Id: 'cancer29', Condition: 'Intraocular Melanoma' },
                        { Id: 'cancer30', Condition: 'Retinoblastoma' },
                        { Id: 'cancer31', Condition: 'Fallopian Tube Cancer' },
                        { Id: 'cancer32', Condition: 'Gallbladder Cancer' },
                        { Id: 'cancer33', Condition: 'Gastric (Stomach) Cancer' },
                        { Id: 'cancer34', Condition: 'Gastrointestinal Carcinoid Tumor' },
                        { Id: 'cancer35', Condition: 'Gastrointestinal Stromal Tumors (GIST) (Soft Tissue Sarcoma)' },
                        { Id: 'cancer36', Condition: 'Gestational Trophoblastic Disease' },
                        { Id: 'cancer37', Condition: 'Hairy Cell Leukemia' },
                        { Id: 'cancer38', Condition: 'Head and Neck Cancer' },
                        { Id: 'cancer39', Condition: 'Hepatocellular (Liver) Cancer' },
                        { Id: 'cancer40', Condition: 'Histiocytosis, Langerhans Cell' },
                        { Id: 'cancer41', Condition: 'Hodgkin Lymphoma' },
                        { Id: 'cancer42', Condition: 'Hypopharyngeal Cancer (Head and Neck Cancer)' },
                        { Id: 'cancer43', Condition: 'Intraocular Melanoma' },
                        { Id: 'cancer44', Condition: 'Islet Cell Tumors, Pancreatic Neuroendocrine Tumors' },
                        { Id: 'cancer45', Condition: 'Kaposi Sarcoma (Soft Tissue Sarcoma)' },
                        { Id: 'cancer46', Condition: 'Kidney (Renal Cell) Cancer' },
                        { Id: 'cancer47', Condition: 'Langerhans Cell Histiocytosis' },
                        { Id: 'cancer48', Condition: 'Laryngeal Cancer (Head and Neck Cancer)' },
                        { Id: 'cancer49', Condition: 'Lip and Oral Cavity Cancer (Head and Neck Cancer)' },
                        { Id: 'cancer50', Condition: 'Liver Cancer' },
                        { Id: 'cancer51', Condition: 'Lung Cancer' },
                        { Id: 'cancer52', Condition: 'Lymphoma' },
                        { Id: 'cancer53', Condition: 'Male Breast Cancer' },
                        { Id: 'cancer54', Condition: 'Melanoma' },
                        { Id: 'cancer55', Condition: 'Merkel Cell Carcinoma (Skin Cancer)' },
                        { Id: 'cancer56', Condition: 'Mesothelioma, Malignant' },
                        { Id: 'cancer57', Condition: 'Metastatic Cancer' },
                        { Id: 'cancer58', Condition: 'Midline Tract Carcinoma With NUT Gene Changes' },
                        { Id: 'cancer59', Condition: 'Multiple Endocrine Neoplasia Syndromes' },
                        { Id: 'cancer60', Condition: 'Multiple Myeloma/Plasma Cell Neoplasms' },
                        { Id: 'cancer61', Condition: 'Nasal Cavity and Paranasal Sinus Cancer' },
                        { Id: 'cancer62', Condition: 'Nasopharyngeal Cancer' },
                        { Id: 'cancer63', Condition: 'Oral Cancer, Lip and Oral Cavity Cancer and Oropharyngeal Cancer' },
                        { Id: 'cancer64', Condition: 'Osteosarcoma and Undifferentiated Pleomorphic Sarcoma of Bone Treatment' },
                        { Id: 'cancer65', Condition: 'Ovarian Cancer' },
                        { Id: 'cancer66', Condition: 'Pancreatic Cancer' },
                        { Id: 'cancer67', Condition: 'Paraganglioma' },
                        { Id: 'cancer68', Condition: 'Parathyroid Cancer' },
                        { Id: 'cancer69', Condition: 'Penile Cancer' },
                        { Id: 'cancer70', Condition: 'Pharyngeal Cancer ' },
                        { Id: 'cancer71', Condition: 'Pheochromocytoma' },
                        { Id: 'cancer72', Condition: 'Pituitary Tumor' },
                        { Id: 'cancer73', Condition: 'Plasma Cell Neoplasm/Multiple Myeloma' },
                        { Id: 'cancer74', Condition: 'Primary Central Nervous System (CNS) Lymphoma' },
                        { Id: 'cancer75', Condition: 'Primary Peritoneal Cancer' },
                        { Id: 'cancer76', Condition: 'Prostate Cancer' },
                        { Id: 'cancer77', Condition: 'Rectal Cancer' },
                        { Id: 'cancer78', Condition: 'Renal Cell (Kidney) Cancer' },
                        { Id: 'cancer79', Condition: 'Retinoblastoma' },
                        { Id: 'cancer80', Condition: 'Salivary Gland Cancer' },
                        { Id: 'cancer81', Condition: 'Ewing Sarcoma (Bone Cancer)' },
                        { Id: 'cancer82', Condition: 'Kaposi Sarcoma (Soft Tissue Sarcoma)' },
                        { Id: 'cancer83', Condition: 'Osteosarcoma (Bone Cancer)' },
                        { Id: 'cancer84', Condition: 'Soft Tissue Sarcoma' },
                        { Id: 'cancer85', Condition: 'Uterine Sarcoma' },
                        { Id: 'cancer86', Condition: 'Skin Cancer' },
                        { Id: 'cancer87', Condition: 'Small Intestine Cancer' },
                        { Id: 'cancer88', Condition: 'Soft Tissue Sarcoma' },
                        { Id: 'cancer89', Condition: 'Thyroid Cancer' },
                        { Id: 'cancer90', Condition: 'Tracheobronchial Tumors' },
                        { Id: 'cancer91', Condition: 'Urethral Cancer' },
                        { Id: 'cancer92', Condition: 'Uterine Cancer, Endometrial' },
                        { Id: 'cancer93', Condition: 'Uterine Sarcoma' },
                        { Id: 'cancer94', Condition: 'Vaginal Cancer' },
                        { Id: 'cancer95', Condition: 'Vascular Tumors (Soft Tissue Sarcoma)' },
                        { Id: 'cancer96', Condition: 'Vulvar Cancer' },
                    ]
                  },
                  {
                    type: 'Heart Conditions',
                    condition: [
                       { Id: 'heart1', Condition: 'Coronary heart disease' } , 
                       { Id: 'heart2', Condition: 'Angina' } , 
                       { Id: 'heart3', Condition: 'Unstable angina' } , 
                       { Id: 'heart4', Condition: 'Heart failure' } , 
                       { Id: 'heart5', Condition: 'Arrhythmia (abnormal heart rhythms)' } , 
                       { Id: 'heart6', Condition: 'Valve disease ' } , 
                       { Id: 'heart7', Condition: 'High blood pressure' } , 
                       { Id: 'heart8', Condition: 'Congenital heart conditions' } ,
                       { Id: 'heart9', Condition: 'Pericardial disease' } , 
                       { Id: 'heart10', Condition: 'Peripheral vascular disease' } , 
                       { Id: 'heart11', Condition: 'Rheumatic heart disease' } , 
                       { Id: 'heart12', Condition: 'Stroke' } , 
                       { Id: 'heart13', Condition: 'Vascular disease (blood vessel disease)' } , 
                       { Id: 'heart14', Condition: 'Deep Vein Thrombosis and Pulmonary Embolism' } , 
                       { Id: 'heart15', Condition: 'Aortic stenosis' } , 
                       { Id: 'heart16', Condition: 'Mitral valve insufficiency' } ,
                       
                    ]
                  },
                  {
                    type: 'Congenital disorders',
                    condition: [
                       { Id: 'con1', Condition: 'cleft lip and cleft palate' } , 
                       { Id: 'con2', Condition: 'congenital heart disease ' } , 
                       { Id: 'con3', Condition: 'cerebral palsy' } , 
                       { Id: 'con4', Condition: 'Fragile X syndrome' } , 
                       { Id: 'con5', Condition: 'Down syndrome' } , 
                       { Id: 'con6', Condition: 'spina bifida' } , 
                       { Id: 'con7', Condition: 'cystic fibrosis' } , 
                       { Id: 'con8', Condition: 'Cleft lip alone' } ,
                       { Id: 'con9', Condition: 'Cleft palate alone' } , 
                       { Id: 'con10', Condition: 'Talipes equinovarus' } , 
                       { Id: 'con11', Condition: 'Reduction defects of upper and lower limbs (longitudinal, transverse, and intercalary)' } , 
                       { Id: 'con12', Condition: 'Exomphalos (omphalocele)' } , 
                       { Id: 'con13', Condition: 'Gastroschisis' } , 
                       { Id: 'con14', Condition: 'Hypospadias' } , 
                       { Id: 'con15', Condition: 'Microtia/Anotia' } , 
                       { Id: 'con16', Condition: 'Anencephaly' } ,
                       { Id: 'con17', Condition: 'Craniorachischisis' } , 
                       { Id: 'con18', Condition: 'Iniencephaly' } , 
                       { Id: 'con19', Condition: 'Encephalocele' } , 
                    ],
                  },
                ]
            }
        },
        methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/medical_history/create';
     this.axios.post(uri, this.medical).then((response) => {
       // this.$router.push({name: 'Prescription'});
       // this.modalShow = false
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
       // this.dismissCountDown = this.dismissSecs
     }).catch(function(error) {
        console.log(error.response.data);
      });
   },
 }
}   
              
</script>
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
    //@import url(https://cdn.syncfusion.com/ej2/material.css);
</style>
