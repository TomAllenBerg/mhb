<template>
  <div class="login">
    <b-container class="bv-example-row">
      <b-row>
        <b-col><PageTitle /></b-col>
      </b-row>

      <b-row>
        <b-col><Logo /></b-col>
        <b-col><LoginCard /></b-col>
      </b-row>
</b-container>


  </div>
</template>

<script>
// @ is an alias to /src
import LoginCard from '../components/LoginCard.vue';
import PageTitle from '../components/PageTitle.vue';
import Logo from '../components/Logo.vue';

export default {
  name: 'Login',
  components: {
    LoginCard,
    PageTitle,
    Logo
  },
};
</script>
