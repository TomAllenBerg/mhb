<template>
    <div class="colorWrapper">
      <div class="flex">
        <h3><i class="fas fa-user-md"></i>Surgeries</h3>
        <b-button size="sm" v-b-modal.modal-1><i class="fas fa-plus"></i>Add Surgery</b-button>
      </div>

      <b-container class="bv-example-row surgeryWrapper" >
        <b-row v-for="(result, index) in results" v-if="result.UUID === sessionID">
          <b-col>
            <div class="infoLine">
              <p class="margin">This is the info for<strong> Surgeries{{result.id}}</strong></p>
              <b-container class="fields">
                <div class="flexy">
                    <p ><i class="fas fa-notes-medical"></i> Name: {{result.surgeryName}}</p>
                    <p ><i class="fas fa-notes-medical"></i> Surgeon: {{result.surgeon}}</p>
                    <p ><i class="fas fa-notes-medical"></i> Date: {{result.surgeryDate}}</p>
                    <p ><i class="fas fa-notes-medical"></i> Description: {{result.surgeryDesc}}</p>
                    <b-button size="sm" variant="danger" @click="deleteData(result.id)">Delete</b-button>
                </div>
              </b-container>
            </div>
          </b-col>
        </b-row>
      </b-container>
    </div>
</template>

<script>
// @ is an alias to /src
import axios from 'axios';

export default {
  name: "SurgeryViewCard",
  data: function() {
         return  {
           results: [],
           sessionID: this.$session.get("sessionID")
         }
    },
  mounted: function() {
    this.getSurgeries()
  },
  methods: {
      getSurgeries() {
        axios.get('/api/surgeries').then(response => {
          this.results = response.data
        })
      },
      deleteData: function(id) {
        console.log("Problem ID: " + id);
        if(confirm("Are you sure you want to remove the information for this surgery?")) {
           axios.post('/api/surgeries/delete/' + id, {_method: 'DELETE'})
           .then(response => {
             this.getSurgeries()
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

.surgeryWrapper {
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
