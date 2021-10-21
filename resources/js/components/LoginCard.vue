<template>
<div>
  <!-- <div class="center"> -->
   <div class="login-form">
    <div id="disabledWrapper">
      <div class="loginColorWrapper">
       <form id="loginForm" action="" method="post">
       <b-form-group has-error>
         <h3>Login or <b>Sign-up</b></h3>
         <label for="Username"><strong>Username</strong></label>
         <Input />
         <div class="invalid-feedback">
         </div>
       </b-form-group>

          <b-form-group has-error>
            <label for="Password"><strong>Password</strong></label>
            <Input />
              <div class="invalid-feedback">
              </div>
          </b-form-group>
          
          <b-form-group has-error>

          </b-form-group>

          <ButtonBlock />

      </form>
      </div>
    </div>
   </div>
  <!-- </div> -->
</div>
</template>

<script>
// @ is an alias to /src
import ButtonBlock from '../components/ButtonBlock.vue';
import Input from '../components/Input.vue';

export default {
  name: "LoginCard",
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

.loginColorWrapper {
  background: #d2fdff;
  padding: 1.5em;
}

.login-form {
		width: 340px;
    margin: 3em auto;
	}



	/* Align MTU logo to center */
	.login-form img {
		display: block;
		width: 70%;
		height: auto;

		margin-left: auto;
		margin-right: auto;
		background: #f7f7f7;
		float: center;
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
