<template>
    <div class="refillInfo">
      <p class="margin">This is the refill info for <strong>prescription #{{refill.id}}</strong></p>
      <b-container class="fields">
        <b-row>
          <b-col>
            <p class="box"><span class="viewTextSpan"><i class="fas fa-calendar"></i> Refill Date:&emsp;</span>{{refill.refill}}</p>
          </b-col>
        </b-row>
        <b-row>
          <b-col>
            <p class="box"><span class="viewTextSpan"><i class="fas fa-fw fa-prescription-bottle"></i> Pharmacy Name:&emsp;</span>{{refill.name}}</p>
          </b-col>
        </b-row>
        <b-row>
          <b-col>
            <p class="box"><span class="viewTextSpan"><i class="fas fa-map-marker-alt"></i> Pharmacy Location:&emsp;</span>{{refill.location}}</p>
          </b-col>
        </b-row>
        <b-row>
          <b-col>
            <p class="box"><span class="viewTextSpan"><i class="fas fa-phone"></i> Pharmacy Phone#:&emsp;</span>{{refill.phone}}</p>
          </b-col>
        </b-row>
      </b-container>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "RefillCard",
  data: function() {
         return  {
           refill: []
         }
    },
  methods: {
    refillInfo(id) {
      // alert("refillCard!");
      // axios.get('/api/refill').then(response => {
      //   this.refill = response.data
      // })
      axios.post('/api/prescription/refill/' + id, {_method: 'POST'})
      .then(response => {
        this.refill = response.data
      });
    },
  }
};
</script>

<style lang="scss" scoped>
.viewTextSpan {
   display: flex;
   justify-content: flex-end;
   align-items: center;
   flex-grow: 0;
   flex-shrink: 0;
   flex-basis: 12.5em;
   margin-bottom: 0;
}

svg {
    margin-right: 7px;
 }

.box {
  display: flex;
  flex-direction: row !important;
   flex-wrap: nowrap !important;
}

.row {
   text-align: left;
}

.refillInfo {
  background-color: #fbe8a6;
  color: #000000;
  margin: 10px;
  width: 90%;
  padding: 1.5em;
}

</style>
