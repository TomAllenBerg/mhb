<template>
   <div class="prescription-add-form">

       <form id="prescriptionAddForm" action="" method="post">
        <b-container class="fields">

          <b-row>
          <b-col>
          <b-form-group has-error>
            <label for="Prescription Name"><strong>Prescription Name</strong></label>
            <Input />
            <div class="invalid-feedback"></div>
          </b-form-group>
          </b-col>
          </b-row>

          <b-row>
          <b-col>
          <b-form-group has-error>
            <label for="Dosage"><strong>Amount</strong></label>
            <Input />
            <div class="invalid-feedback"></div>
          </b-form-group>
          </b-col>
          <b-col>
          <b-row>
          <select class="form-select" aria-label="multiple select example">
            <option selected>kg</option>
            <option value="1">g</option>
            <option value="2">mg</option>
            <option value="3">mcg</option>
            <option value="4">L</option>
            <option value="5">mL</option>
            <option value="6">cc</option>
            <option value="7">tablets</option>
            <option value="8">drops</option>
          </select>
          </b-row>
          <b-row>
          <select class="form-select" aria-label="multiple select example">
            <option selected>Oral</option>
            <option value="1">Subcutaneous Injection</option>
            <option value="2">Intramuscular Injection</option>
            <option value="3">Intravenous Injection</option>
            <option value="4">Inhalation</option>
            <option value="5">Ocular</option>
            <option value="6">Topical</option>
          </select>
          </b-row>
          </b-col>
          </b-row>

          <b-row>
          <b-col>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Instructions</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          </b-col>
          </b-row>

          <b-row>
          <b-col>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Side Effects</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          </b-col>
          </b-row>

          <ButtonBlock  buttonBlockText="Add Prescription"  />

        </b-container>
      </form>
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
    padding: 10px;
    
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

.invalid-feedback {
	display: block !important;
}

</style>
