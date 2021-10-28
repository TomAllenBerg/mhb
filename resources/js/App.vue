<template>
  <div id="app">
      <div id="nav">
          <link rel="icon" type="image/ico" href="/images/favicon.ico"/>
          <router-link to="/">Home</router-link> |
          <router-link to="/about">About</router-link> |
          <router-link to="/prescription">Prescriptions</router-link> |
          <router-link to="/medical">Medical History</router-link> |
          <router-link to="/login">Login</router-link>
      </div>
    <router-view/>
  </div>
</template>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #white;
  background-color: #303c6c;
  min-height: 100vh;
  margin: 0;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: white;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
