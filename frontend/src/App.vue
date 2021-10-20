<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link> |
      <router-link to="/prescription">Prescriptions</router-link> |
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
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

.button {
  display: inline-block;
  background: #000;
  color: rosybrown;
  border: none;
  padding: 10px 20px;
  margin: 5px;
  border-radius: 0px;
  cursor: pointer;
  text-decoration: none;
  font-size: 30px;
  font-family: inherit;
}
</style>
