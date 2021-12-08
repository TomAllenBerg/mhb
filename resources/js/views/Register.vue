<template>
  <div class="login">
    <b-container class="bv-example-row">
      <b-row>
        <b-col><PageTitle /></b-col>
      </b-row>

      <b-row>
        <b-col><Logo /></b-col>
        <b-col>
          <div class="login-form">
           <div id="disabledWrapper">
             <div class="loginColorWrapper">
              <form id="loginForm" action="" method="post">
              <b-form-group has-error>
                <h3>Create account</h3>
                <label for="Email"><strong>Email</strong></label>
                <!-- <input class="darkBlueInput form-control" v-model="user.email" inputPlaceholder="Email"/> -->
                <input class="darkBlueInput form-control" v-model="user.email" placeholder="Email" required />
                <div class="invalid-feedback">
                </div>
              </b-form-group>

                 <b-form-group has-error>
                   <label for="Password"><strong>Password</strong></label>
                   <!-- <input class="darkBlueInput form-control" v-model="user.password" inputPlaceholder="Password"/> -->
                   <input class="darkBlueInput form-control" type="password" v-model="user.password" placeholder="Password" required/>
                     <div class="invalid-feedback">
                     </div>
                 </b-form-group>

                 <b-form-group has-error>
                   <label for="Confirm Password"><strong>Confirm Password</strong></label>
                   <!-- <input class="darkBlueInput form-control" v-model="user.confirm_password" inputPlaceholder="Confirm Password"/> -->
                   <input class="darkBlueInput form-control" type="password" v-model="user.confirm_password" placeholder="Confirm Password" required/>
                     <div class="invalid-feedback">
                     </div>
                 </b-form-group>


                 <ButtonBlock @click.native="addUser" buttonBlockText="Sign up" />

                 <p class="routerLink">Have an account? <router-link to="/login">Login</router-link></p>
             </form>
             </div>
           </div>
          </div>
        </b-col>
      </b-row>
</b-container>


  </div>
</template>

<script>
// @ is an alias to /src
import PageTitle from '../components/PageTitle.vue';
import Logo from '../components/Logo.vue';
import ButtonBlock from '../components/ButtonBlock.vue';
import Input from '../components/Input.vue';
import axios from 'axios';

export default {
  name: "Login",
  components: {
    ButtonBlock,
    Input,
    PageTitle,
    Logo
  },
  data: function() {
    return{
      user:{
      email: "",
      password: "",
      confirm_password: "",
       }
    };
  },
  // define methods under the `methods` object
  methods: {
    addUser(){
    let uri = '/api/user/register';
    this.axios.post(uri, this.user).then((response) => {
      this.$router.push({path: '/'});
      console.log('Added Successfully');
      console.log(this.user);
      // this.dismissCountDown = this.dismissSecs
    }).catch((error) => {
       console.log(this.user);
       this.errors = error.response.data.errors;
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

.routerLink {
  margin-top: 1em;
}

h3 {
  font-size: 1.9rem;
  text-align:left;
  font-weight: 600;
  margin-bottom: .75em;
}

.loginColorWrapper {
  background: #d2fdff;
  padding: 1.5em;
}

.login-form {
		width: 340px;
    margin: 3em auto;
	}

    .login-form form {
        background-color: #b4dfe5;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
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
