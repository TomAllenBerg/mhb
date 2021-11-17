<template>
    <div class = "ColorWrapper">
     <div>
        <label class="typo__label">Select Your Medical Conditions</label>
        <multiselect v-model="value" :options="options" :multiple="true" group-values="condition" group-label="type" :group-select="true" placeholder="Type to search for your medical conditions" track-by="Condition" label="Condition"><span slot="noResult">Oops! No elements found. Consider changing the search query.</span></multiselect>
        <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template>
        <pre class="language-json"><code>{{ value  }}</code></pre>
    </div>
  </div>
</template>

<script>
import Multiselect from 'vue-multiselect';
Vue.component('multiselect', Multiselect);
export default {
        data(){
            return{
                value: null,
                options: [
                  {
                    type: 'Medical Conditions',
                    condition: [
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
                    ]
                   
                  },
                  
                ],
            }
        }
}
</script>

<style lang="scss" scoped>
    //@import url(https://cdn.syncfusion.com/ej2/material.css);
</style>
   


