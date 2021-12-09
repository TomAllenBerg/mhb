<template>

<b-modal id="modal-1" title="Add Past Surgery" modal-class="modal-background-color" @hide="resetInfoModal">

   <div class="surgery-add-form">

    <form id="surgeryAddForm" action="" method="addPost">
        <b-container class="fields">
        <b-row>
        <b-col>

        <b-form-group has-error>
            <label for="Surgery Name"><strong>Surgery Name</strong></label>
             <input type="text" class="form-control" v-model="surgery.surgeryName">
            <div class="invalid-feedback"></div>
          </b-form-group>

            <b-form-group has-error>
              <label for="Surgeon"><strong>Surgeon Name</strong></label>
               <input type="text" class="form-control" v-model="surgery.surgeon">
            </b-form-group>

            <b-form-group has-error>
            <label for="surgeryDate"><strong>Date</strong></label>
            <b-form-datepicker id="example-datepicker" na me="surgeryDate" v-model="surgery.surgeryDate" class="mb-2"></b-form-datepicker>
          </b-form-group>

            <b-form-group has-error>
              <label for="Description"><strong>Description/Comments</strong></label>
               <input type="text" class="form-control" v-model="surgery.surgeryDesc">
            </b-form-group>

       </b-col>

        </b-row>

        <b-row>
            <b-button class="mr-2 leftMargin" @click="$bvModal.hide('modal-1')">Cancel</b-button>
            <ButtonBlock @click.native="addPost" buttonBlockText="Add Surgery"/>
        </b-row>

        </b-container>
      </form>
      </div>
</b-modal>
</template>

<script>
// @ is an alias to /src
import ButtonBlock from './ButtonBlock.vue';
import Input from './Input.vue';
import axios from 'axios'

export default {
  name: "SurgeryAddCard",
  components: {
    ButtonBlock,
    Input
  },

  data() {
   return {
     surgery:{
       surgeryName:" ",
       surgeon:" ",
       surgeryDate:" ",
       surgeryDesc:" ",
     }
   }
 },

 methods: {
   // Method to take data and make an api request to store that data
   addPost(){
     let uri = '/api/surgeries/store';
     this.axios.post(uri, this.surgery).then((response) => {
       // this.$router.push({name: 'Prescription'});
       // this.modalShow = false
       this.$bvModal.hide('modal-1')
       this.$emit('success-alert')
       // this.dismissCountDown = this.dismissSecs
     }).catch(function(error) {
        console.log(error.response.data);
      });
   },
     resetInfoModal() {
        this.surgery.surgeryName = '';
        this.surgery.surgeon = '';
        this.surgery.surgeryDate = '';
        this.surgery.surgeryDesc = '';
  },
 }

};
</script>

<style lang="scss" scoped>
.flexBox {
  display: flex;
  justify-content: space-between;
  align-items:center;
}

.leftMargin {
  margin-left: 15px;
}
h3 {
  font-size: 1.9rem;
}

::v-deep .modal-content {
  background-color: #303c6c !important;
}

::v-deep .modal-title {
  color: white;
}

::v-deep .modal-footer {
  display: none;
}

::v-deep .close {
  opacity: 1;
  color: #fff;
}

.surgery-add-form {
		width: auto;
    margin: 10px;
	}

.surgery-add-form form {
    background-color: #fbe8a6;
    color: #303c6c;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 10px;

}
.surgery-add-form h2 {
    margin: 0 0 15px;
}
// .form-control, .btn {
//     min-height: 38px;
//     border-radius: 2px;
// }
// .btn {
//     font-size: 15px;
//     font-weight: bold;
// }



label {
  margin-bottom: 0.1em;
  // float: left;
}

.invalid-feedback {
	display: block !important;
}

</style>
