<template>
    <div class="refillInfo">
      This is the refill info
      <b-container class="fields">
        <b-row>
          <b-col>
          Refill Date:
          </b-col>
        </b-row>
        <b-row>
          <b-col>
          Pharmacy Phone#:
          </b-col>
        </b-row>
        <b-row>
          <b-col>
          Pharmacy Address:
          </b-col>
        </b-row>
        <b-row>
          <b-col>
          Refills Remaining:
          </b-col>
        </b-row>
        <b-row>
          <b-col>
          Doctor:
          </b-col>
        </b-row>
      </b-container>     
    </div>
</template>

<script>

export default {
  name: "RefillCard"
};
</script>

<style>

.row {
   text-align: left;
}

.refillInfo {
  background-color: #fbe8a6;
  color: #000000;
  margin: auto;
  width: 90%;
  padding: 1.5em;
}

</style>
