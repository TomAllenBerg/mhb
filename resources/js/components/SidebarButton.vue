<template>
    <button class="squareButton" @click="$router.push(page)">
    <img class="pageImage" :src="require(`../assets/sidebarLogos/${imageSource}`)" /><br/>

    <span class="buttonText">{{text}}</span>
    </button>
</template>

<script>
export default {
    name: 'SidebarButton',
    props: {
        text: String,
        page: String,
        imageSource: String
    }
}
</script>

<style scoped>
.squareButton {
    display: block;
    color: #111;
    background: #ffffff00;
    border: none;
    width: 130px;
    height: 130px;
    cursor: pointer;
    font-size: 17px;
    position: relative;
}

.pageImage{
    max-width: 85px;
    max-height: 85px;
}

.buttonText{
    position: absolute;
    bottom: 2%;
    width: 100%;
    left: 0%
}
</style>
