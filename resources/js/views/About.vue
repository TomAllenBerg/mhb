<template>
  <div class="about">
    <Sidebar/>
    <h1>About MyHealthBin!</h1>
    <div class = "authors">
      <div class = "developers">
        <h3>Developers</h3>
        <p>Role #1: Kenzie Baker</p>
        <p>Role #2: Tom Berg</p>
        <p>Role #3: Evan Cochran</p>
        <p>Role #4: Benjamin Collicot</p>
        <p>Role #5: Noah Deverney</p>
        <p>Role #19: Cale McDonnell</p>
      </div>
      <div class = "managers">
        <h3>Managers</h3>
        <p>Role #12: Jack Hayes</p>
        <p>Role #2: Eric Belt</p>
        <p>Role #3: Mike Boisvert</p>
      </div>
    </div>
    <br><br>
    <div class = "description">
    <h3>Description</h3>
    <p>People who have various medical issues or caretakers of those with medical issues tend to have a <br>
      lot to keep track of. They have to keep track of prescriptions, appointments, different doctors, and many <br>
      other things but there are very limited resources to keep track of all of that information in one area. <br>
      So we created MyHealth-Bin which is a personal health tool and web application intended to help <br>
      users keep a record of their medical info and more.
      </p>
    </div>
  </div>

</template>

<script>
import Sidebar from '../components/Sidebar.vue'

export default {
  name: 'About',
  components: {
    Sidebar
  }
}
</script>

<style lang="scss" scoped>
.about {
  color: white !important;
  padding: 20px;
  margin-left: 130px;/*account for sidebar*/
}

.authors {
  display: flex;
  justify-content: space-evenly;
  
}
.developers {
  order: 1;
}
.managers {
  order: 2;
}

</style>
