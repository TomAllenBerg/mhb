
<template>
    <div class = "ColorWrapper">
      <div class="bar" style="margin:10% 25%;width:400px">
        <br>
        <ejs-multiselect :dataSource='localData' 
        :fields='localFields' placeholder='Select Medical Conditions'
        popupWidth="400px"
        popupHeight="200px"
        sortOrder='Descending'>
        </ejs-multiselect>
      </div>
    </div>
</template>

<script>
import Vue from 'vue';
import{ MultiSelectPlugin } from '@syncfusion/ej2-vue-dropdowns';
Vue.use(MultiSelectPlugin);
import{ DataManager, WebApiAdaptor } from '@syncfusion/ej2-data';
var remoteDataSource = new DataManager({
   url: 'https://clinicaltables.nlm.nih.gov/api/conditions/v3/search/terms',
   adaptor: new WebApiAdaptor,
   crossDomain: true
});
export default Vue.extend({
  data: function() {
    return {
      remoteData: remoteDataSource,
      remoteFields: {text: 'FirstName',  value: 'EmployeeID'},
      localData:[
        { Id: 'condition1', Condition: 'Amyotrophic Lateral Sclerosis (ALS)' },
        { Id: 'condition2', Condition: 'Arrhythmia' },
        { Id: 'condition3', Condition: 'Arthritis' },
        { Id: 'condition4', Condition: 'Atrial Fibrillation' },
        { Id: 'condition5', Condition: 'Autism' },
        { Id: 'condition6', Condition: 'Cancer' },
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
        { Id: 'condition29', Condition: 'Melanoma/Skin Cancer' },
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
      ],
      localFields:{value: 'Id', text: 'Condition' }
    };
  }
});
</script>

<style lang="scss" scoped>
    @import url(https://cdn.syncfusion.com/ej2/material.css);
</style>
   


