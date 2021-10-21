<template>
  <div class="login">
    <b-container class="bv-example-row">
      <b-row>
        <b-col><PageTitle /></b-col>
      </b-row>

      <b-row>
        <b-col><img alt="myHealthBinLogo logo" src="../assets/myHealthBinLogo.png" /></b-col>
        <b-col><LoginCard /></b-col>
      </b-row>
</b-container>


  </div>
</template>

<script>
// @ is an alias to /src
import LoginCard from '../components/LoginCard.vue';
import PageTitle from '../components/PageTitle.vue';

export default {
  name: 'Login',
  components: {
    LoginCard,
    PageTitle
  },
};
</script>
