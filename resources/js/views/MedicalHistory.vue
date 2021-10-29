<template>
    <div class="medical">
        <Sidebar/>
        <h1>Medical History</h1>
        <div class="your">
            <h3>Please Select Your Current Medical Conditions</h3>
            <div class="ColorWrapper">
                <div class="Conditions">
                    <form @submit.prevent="handleSubmit">
                        <div class="form-group form-check" v-for="item in Items" v-bind:key="item.id">
                            <label class="form-check-label" :for="item.id">{{item.name}}</label>
                            <input type="checkbox" v-model="user.conditions" :id="item.name" :value="item.name">
                        </div>
                        <!-- print result -->
                        <div class="form-group">
                            {{user.conditions}}
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import Sidebar from '../components/Sidebar.vue'

    export default {
        name: 'Medical History',
        components: {
            Sidebar,
        },
        data() {
            return {
                Items: [
                    {
                        name: 'Acne'
                    },
                    {
                        name: 'Arthritis'
                    },
                    {
                        name: 'Asthma'
                    },
                    {
                        name: 'Carpal Tunnel Syndrome'
                    },
                    {
                        name: "Crohn's Disease"
                    },
                    {
                        name: "Diabetes"
                    },
                    {
                        name: "Eczema"
                    },
                    {
                        name: "Glaucoma"
                    }

                ],
                user: {
                    Conditions: []
                }
            };
        },
        methods: {
            handleSubmit() {
                alert(JSON.stringify(this.user));
            }
        }
    };
</script>

<style lang="scss" scoped>
    .medical {
        margin-bottom: 1px;
        margin-right: 1px;
        margin-right: 1px;
        background: #303c6c;
        padding: 10px;
    }
    .medical h1 {
        color: #ffffff;
        font-family: Helvetica, 'Open Sans', Arial, sans-serif;
        font-size: 68px;
        font-weight: bold;
    }
    .ColorWrapper {
      margin-top: 25px;
        background: #d2fdff;
        padding: 1.5em;
        width: 350px;
        margin-left: 450px !important;
    }
    .Conditions {
        max-height: 300px;
        overflow: auto;
        width: 295px;
        background-color: #b4dfe5;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .your h3 {
        color: #ffffff;
    }
</style>
