<template>
<div>
  <b-form-input class="darkBlueInput" :placeholder="inputPlaceholder" required="required"></b-form-input>
</div>
</template>

<script>
export default {
  name: "Input",
  props: {
    inputPlaceholder: String
  },
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
</style>
