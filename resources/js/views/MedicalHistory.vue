<template>
    <div class="medical">
        <Sidebar/>
        <h1>Medical History</h1>
        <div class="container">
              <div class = 'basicInfo'>
                 <BasicInfoAddCard/>
            </div>
            <div class = "surgery">
                <b-col><HistoryAddCard/></b-col>
            </div>    
            <div class = 'button'>
                 <ButtonBlock buttonBlockText="View My Medical History"/>
            </div>
          
        </div>
    </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';
import HistoryAddCard from '../components/HistoryAddCard.vue';
import ConditionsAddCard from '../components/ConditionsAddCard.vue';
import ButtonBlock from '../components/ButtonBlock.vue';
import BasicInfoAddCard from '../components/BasicInfoAddCard.vue';
import Multiselect from 'vue-multiselect';
  Vue.component('multiselect', Multiselect)
    export default {
        data(){
            return{
                value: null,
                options: ["a1", "a2", "a3"],
            }
        },
        name: 'MedicalHistory',
        components: {
            Sidebar,
            HistoryAddCard,
            ConditionsAddCard,
            ButtonBlock,
            BasicInfoAddCard,
            Multiselect
        },
    };
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss" scoped>

    .medical {
        margin-bottom: 1px;
        margin-right: 1px;
        background: #303c6c;
        padding: 20px;
        margin-left: 130px;/*account for sidebar*/
    }
    .medical h1 {
        color: #ffffff;
        font-family: Helvetica, 'Open Sans', Arial, sans-serif;
        font-size: 68px;
        font-weight: bold;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-content: stretch;
        gap: 60px;
    }
    .conditions{
        margin: auto;
        width: 50%;
        order: 2;

    }
    .basicInfo{
        order: 1;

    }
    .ConditionsAddCard{
    outline: 10px solid #ffff;
    }
    .surgery{
        order: 3;
    }
    .button{
        order: 4;
    }
</style>
