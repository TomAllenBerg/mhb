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

<style lang="scss" scoped>
.squareButton {
    display: block;
    color: #111;
    background: #ffffff00;
    border: none;
    width: 90px;
    height: 90px;
    cursor: pointer;
    font-size: 12px;
    position: relative;
}

.pageImage{
    max-width: 50px;
    max-height: 50px;
}

.buttonText{
    position: absolute;
    bottom: 2%;
    width: 100%;
    left: 0%;
    color: #7F4E39;
}
</style>
