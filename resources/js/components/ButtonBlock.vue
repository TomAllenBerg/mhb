<template>
<div>
  <b-button class="darkBlue" variant="primary btn-block" value="login">{{buttonBlockText}}</b-button>
</div>
</template>

<script>
export default {
  name: "ButtonBlock",
  props: {
    buttonBlockText: String
  },
};
</script>

<style lang="scss" scoped>
.darkBlue {
  background: #303c6c;
}

.darkBlue:hover {
  background: #2b355f;
}

.darkBlue:active {
  background: #495a9d !important;
}

.darkBlue:focus {
  border-color: #0062cc;
  box-shadow: 0 0 0 0.2rem rgb(29 102 180 / 50%);
}
</style>
