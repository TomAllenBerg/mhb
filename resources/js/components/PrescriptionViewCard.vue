<template>
    <div class="colorWrapper">
      <div class="flex">
        <h3><i class="fas fa-fw fa-capsules"></i>Current Prescriptions</h3>
        <b-button size="sm" v-b-modal.modal-1><i class="fas fa-fw fa-plus"></i> Add prescription</b-button>
      </div>

      <b-container class="bv-example-row doctorWrapper" >
        <b-row v-for="(result, index) in results">
          <b-col>
            <div class="infoLine" @click="refill(result.id)">
              <p class="margin">This is the info for <strong>prescription #{{result.id}}</strong></p>
              <b-container class="fields">
                <div class="flexy">
                    <p class="box"><span class="viewTextSpan"><i class="fas fa-prescription"></i> Name:&emsp;</span>{{result.name}}</p>
                    <p class="box"><span class="viewTextSpan"><i class="fas fa-fw fa-user-md"></i> Doctor:&emsp;</span>{{result.doctor}}</p>
                    <p class="box"><span class="viewTextSpan"><i class="fas fa-fw fa-balance-scale"></i> Dosage:&emsp;</span>{{result.dosage_amt}} {{result.dosage_unit}}</p>
                    <p class="box"><span class="viewTextSpan"><i class="fas fa-fw fa-syringe"></i> Route:&emsp;</span>{{result.route}}</p>
                    <p class="box"><span class="viewTextSpan"><i class="fas fa-fw fa-clipboard"></i> Instructions:&emsp;</span>{{result.instructions}}</p>
                    <p class="box"><span class="viewTextSpan"><i class="fas fa-fw fa-head-side-cough"></i> Side Effects:&emsp;</span>{{result.side_effects}}</p>
                    <b-button size="sm" variant="danger" class="mt-2" @click="deleteData(result.id)">Delete</b-button>
                </div>
              </b-container>
            </div>
          </b-col>
        </b-row>
      </b-container>
    </div>
</template>

<script>
// // @ is an alias to /src
// import PrescriptionInfo from '../components/PrescriptionInfo.vue';
import axios from 'axios';

export default {
  name: "PrescriptionViewCard",
  data: function() {
         return  {
           results: []
         }
    },
  mounted: function() {
    this.getPrescriptions()
  },
  methods: {
      refill: function(id) {
        this.$emit('refill', id)
      },
      getPrescriptions: function() {
        axios.get('/api/prescriptions').then(response => {
          this.results = response.data
        })
      },
      deleteData: function(id) {
        if(confirm("Are you sure you want to remove the information for this prescription?")) {
           axios.post('/api/prescription/delete/' + id, {_method: 'DELETE'})
           .then(response => {
             this.getPrescriptions()
             this.$emit('success-alert')
           });
        }
      }
    },
};
</script>

<style lang="scss" scoped>
svg {
    margin-right: 7px;
 }
 .svgNoMargin {
   margin-right: 0;
 }
 .viewTextSpan {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 10.5em;
    margin-bottom: 0;
 }

 .box {
   display: flex;
   flex-direction: row !important;
    flex-wrap: nowrap !important;
 }

 p.box {
   margin-bottom: 2px;
 }

.infoLine {
  background: #b4dfe5;
  color: #000000;
  text-align: left;
  padding: 1.5em;
  border: 1px solid #ced4da;
  border-radius: 0.25em;
}
.infoLine:hover {
  background-color: #a6ccd1;
  border: 1px solid #ced4da;
  border-color: #80bdff;
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  cursor: pointer;
}

.flex {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  padding-bottom: 1em;
  align-items:center;
}

h3 {
  font-size: 1.9rem;
  margin-bottom: 0;
}

.row {
   text-align: left;
}

.doctorWrapper {
  max-height: 65vh;
  overflow-y: scroll;
}

.colorWrapper {
  background: #d2fdff;
  color: #303c6c;
  position: absolute;
  left: 0%;
  right: 0%;
  padding: 1.5em;
  margin: auto;
}

.row {
  padding: .5em;
}
</style>
