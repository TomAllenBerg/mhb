<template>
<div>
  <!-- <div class="center"> -->
   <div class="history-add-form">
    <div id="disabledWrapper">
       <form id="historyAddForm" action="" method="post">
       <b-form-group has-error>
         <h3>Add Past Surgeries</h3>
         <label for="Surgery Name"><strong>Surgery Name</strong></label>
         <input type="text" class="form-control darkBlueInput" v-model="medical.surgeryName">
         <div class="invalid-feedback">
         </div>
       </b-form-group>
            <b-form-group has-error>
              <label for="Surgeon"><strong>Surgeon Name</strong></label>
               <input type="text" class="form-control darkBlueInput" v-model="medical.surgeon">
            </b-form-group>
            <b-form-group has-error>
            <label for="Date"><strong>Date</strong></label>
            <input type="text" class="form-control darkBlueInput" v-model="medical.surgeryDate">
              <div class="invalid-feedback">
              </div>
          </b-form-group>
            <b-form-group has-error>
              <label for="Description"><strong>Description/Comments</strong></label>
               <input type="text" class="form-control darkBlueInput" v-model="medical.surgeryDesc">
            </b-form-group>

            <br><br>
             <ButtonBlock @click.native="addPost" buttonBlockText="Add Surgery"/>
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
import axios from 'axios'

export default {
  name: "HistoryAddCard",
  components: {
    ButtonBlock,
    Input
  },

  data() {
   return {
     medical:{
       surgery_name:" ",
       surgeon_name:" ",
       sugery_date:" ",
       surgery_description:" "
     }
   }
 },

 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/prescription/store';
     this.axios.post(uri, this.prescription).then((response) => {
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

};
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

h3 {
  font-size: 1.9rem;
}

.history-add-form {
		width: 340px;
    margin: 3em auto;
	}

.history-add-form form {
    background-color:#b4dfe5;
    color: #303c6c;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.history-add-form h2 {
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
