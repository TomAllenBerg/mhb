<template>
    <div class="infoLine">
      This is the prescription info
      <b-container class="fields">
        <b-row>
          <b-col>
            Name:
          </b-col>
          <b-col>
            Doctor:
          </b-col>
          </b-row>
          <b-row>
            Dosage:
          </b-row>
          <b-row>
            Side Effects:
          </b-row>
      </b-container>

        
    </div>
</template>

<script>

export default {
  name: "PrescriptionInfo"
};
</script>

<style lang="scss" scoped>



.infoLine {
  background: #b4dfe5;
  color: #000000;
  text-align: left;
  padding: 1.5em;
}

</style>
