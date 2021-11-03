<template>
    <div class="medical">
        <Sidebar/>
        <h1>Medical History</h1>
        <div class="container">
            <div class="conditions">
                <ConditionsAddCard />
            </div>
            <div class = "surgery">
                <b-col><HistoryAddCard/></b-col>
            </div>    
            <div class = 'button'>
                 <ButtonBlock  buttonBlockText="View My Medical History" />
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';
import HistoryAddCard from '../components/HistoryAddCard.vue';
import ConditionsAddCard from '../components/ConditionsAddCard.vue';
import ButtonBlock from '../components/ButtonBlock.vue';


    export default {
        name: 'MedicalHistory',
        components: {
            Sidebar,
            HistoryAddCard,
            ConditionsAddCard,
            ButtonBlock,
        },
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
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-content: stretch;
        gap: 60px;
    }
    .conditions{
        margin: auto;
        width: 50%;
        order: 1;

    }
    .ConditionsAddCard{
    outline: 10px solid #ffff;
    }
    .surgery{
        order: 2;
    }
    .button{
        order: 3;
    }
</style>
