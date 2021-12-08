<template>
    <div class="medical">
        <Sidebar/>
        <h1><strong>Medical History</strong></h1>
        <b-container class="bv-example-row">
            <b-alert
                :show="dismissCountDown"
                dismissible
                variant="success"
                @dismissed="dismissCountDown=0"
                @dismiss-count-down="countDownChanged"
            >
            Success! Surgery information changed. Alert will close in {{ dismissCountDown }} seconds...
        </b-alert>
       <b-row>
        <b-col><SurgeryViewCard @success-alert="showAlert" ref="surgery"/></b-col>

        <b-col><SurgeryAddCard @success-alert="showAlert"/></b-col>

        <b-col class="mb-2"><BasicInfoAddCard ref="basic"/></b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';
import SurgeryAddCard from '../components/SurgeryAddCard.vue';
import ButtonBlock from '../components/ButtonBlock.vue';
import BasicInfoAddCard from '../components/BasicInfoAddCard.vue';
import Multiselect from 'vue-multiselect';
import SurgeryViewCard from '../components/SurgeryViewCard.vue';
  Vue.component('multiselect', Multiselect)
    export default {
        data(){
            return{
            dismissSecs: 5,
            dismissCountDown: 0
        }
            },
        name: 'MedicalHistory',
        components: {
            Sidebar,
            SurgeryAddCard,
            ButtonBlock,
            BasicInfoAddCard,
            Multiselect,
            SurgeryViewCard,
        },
        methods: {
      countDownChanged(dismissCountDown) {
        this.dismissCountDown = dismissCountDown
      },
      showAlert() {
        this.dismissCountDown = this.dismissSecs
      }
    },
 }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss" scoped>
    .medical {
        color: white;
        padding: 20px;
        margin-left: 130px;/*account for sidebar*/
    }
</style>
