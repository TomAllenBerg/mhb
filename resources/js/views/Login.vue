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
                <h3>Log in</h3>
                <label for="Email"><strong>Email</strong></label>
                <Input v-model="body" inputPlaceholder="Email"/>
                <div class="invalid-feedback">
                </div>
              </b-form-group>

                 <b-form-group has-error>
                   <label for="Password"><strong>Password</strong></label>
                   <Input v-model="title" type="password" inputPlaceholder="Password"/>
                   <!-- <input v-model="title" placeholder="Title" required />
                   <input v-model="body" placeholder="Title" required /> -->
                     <div class="invalid-feedback">
                     </div>
                 </b-form-group>

                 <ButtonBlock @click.native="greet" buttonBlockText="Log in" />

                 <p class="routerLink">Need an account? <router-link to="/register">Sign up</router-link></p>
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
    return {
      post: "",
      title: "",
      body: "",
       name: 'Vue.js'
    };
  },
  // define methods under the `methods` object
  methods: {
    greet: function (event) {
      // `this` inside methods points to the Vue instance
      // alert('Hello ' + this.name + '!')
      // // `event` is the native DOM event
      // if (event) {
      //   alert(event.target.tagName)
      // }
      const postData = { title: this.title, body: this.body };
      axios
        .get("/myhealthbin/api/prescriptions", userid)
        .then(res => {
          console.log(res.body);
        });
    }
  }
};
</script>

<style lang="scss" scoped>
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
