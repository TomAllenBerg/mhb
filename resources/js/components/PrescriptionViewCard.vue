<template>
<div>
  <!-- <div class="center"> -->
   <div class="prescription-add-form">
    <div id="disabledWrapper">
    <div class="loginColorWrapper">
      <h3>Current Prescriptions</h3>
      <b-container class="bv-example-row">
        <b-row>
        <PrescriptionInfo />
        </b-row>
      </div>
    </div>
    </div>
   </div>
  <!-- </div> -->
</div>
</template>

<script>
// @ is an alias to /src
import PrescriptionInfo from '../components/PrescriptionInfo.vue';

export default {
  name: "PrescriptionAddCard",
  components: {
    PrescriptionInfo
  },
};
</script>

<style lang="scss" scoped>
h3 {
  font-size: 1.9rem;
}

.loginColorWrapper {
  background: #d2fdff;
  color: #303c6c;
  padding: 1.5em;
}

.prescription-add-form {
		width: 340px;
    margin: 3em auto;
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
