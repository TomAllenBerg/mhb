<template>
    <div class="colorWrapper">
      <div class="flex">
        <h3><i class="fas fa-user-md"></i> Doctors</h3>
        <b-button size="sm" v-b-modal.modal-1><i class="fas fa-plus"></i> Add doctor</b-button>
      </div>

      <b-container class="bv-example-row doctorWrapper" >
        <b-row v-for="(result, index) in results" v-if="result.UUID === sessionID">
          <b-col>
            <div class="infoLine">
              <p class="margin">This is the info for <strong>doctor #{{result.id}}</strong></p>
              <b-container class="fields">
                <div class="flexy">
                    <p ><i class="fas fa-user-alt"></i> Name: {{result.name}}</p>
                    <p ><i class="fas fa-notes-medical"></i> Specialty: {{result.specialty}}</p>
                    <p ><i class="fas fa-map-marker-alt"></i> Location: {{result.location}}</p>
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
// import DoctorInfo from '../components/DoctorInfo.vue';
import axios from 'axios';

export default {
  name: "DoctorViewCard",
  // components: {
  //   DoctorInfo
  // },
  data: function() {
         return  {
           results: [],
           sessionID: this.$session.get("sessionID")
         }
    },
  mounted: function() {
    this.getDoctors()
  },
  methods: {
      getDoctors() {
        axios.get('/api/doctors').then(response => {
          this.results = response.data
        })
      },
      // deleteData:function(id){
      //   if(confirm("Are you sure you want to remove this data?")) {
      //    axios.post('/api/doctors/delete/', {
      //     action:'delete',
      //     id:id
      //    }).then(function(response){
      //     application.fetchAllData();
      //     alert(response.data.message);
      //    });
      //   }
      //  }
      // },
      deleteData: function(id) {
        if(confirm("Are you sure you want to remove the information for this doctor?")) {
           axios.post('/api/doctor/delete/' + id, {_method: 'DELETE'})
           .then(response => {
             this.getDoctors()
             this.$emit('success-alert')
           });
        }
      }
    },
// mounted: function () {
//   this.$nextTick(function () {
//     // Code that will run only after the
//     // entire view has been rendered
//     axios.get('/api/doctors')
//   .then(function (response) {
//     // handle success
//     this.results = response.data
//     console.log(response);
//
//   })
//   .catch(function (error) {
//     // handle error
//     console.log(error);
//   })
//   })
// }
};
</script>

<style lang="scss" scoped>
p {
  margin-bottom: 0;
  height:100%;
}

.flexy {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.fields {
  padding-left: 0;
  padding-right: 0;
}

.margin {
  margin-bottom: 5px;
}

.doctorWrapper {
  max-height: 65vh;
  overflow-y: scroll;
}
.infoLine {
  background: #b4dfe5;
  color: #000000;
  text-align: left;
  padding: 1.5em;
  border: 1px solid #ced4da;
  border-radius: 0.25em;
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
