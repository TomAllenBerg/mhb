<template>
   <div class="prescription-add-form">
    <div id="disabledWrapper">
       <form id="prescriptionAddForm" action="" method="post">
       <b-form-group has-error>
       
         <label for="Prescription Name"><strong>Prescription Name</strong></label>
         <Input />
         <div class="invalid-feedback">
         </div>
       </b-form-group>

          <b-form-group has-error>
            <label for="Dosage"><strong>Dosage</strong></label>
            <Input />
              <div class="invalid-feedback">
              </div>
          </b-form-group>

          <b-form-group has-error>

          </b-form-group>

          <ButtonBlock  buttonBlockText="Add Prescription"  />
          
      </form>
      </div>
    </div>
   </div>
</template>

<script>
// @ is an alias to /src
import ButtonBlock from '../components/ButtonBlock.vue';
import Input from '../components/Input.vue';

export default {
  name: "PrescriptionAddCard",
  components: {
    ButtonBlock,
    Input
  },
};
</script>

<style lang="scss" scoped>
h3 {
  font-size: 1.9rem;
}

.prescription-add-form {
		width: 340px;
    margin: auto;
	}

.prescription-add-form form {
    background-color: #fbe8a6;
    color: #303c6c;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    
}
.prescription-add-form h2 {
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
}

.invalid-feedback {
	display: block !important;
}

</style>
