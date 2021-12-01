<template>
    <div id="app">
        <img alt="myHealthBin Logo" :src="Logo"/>
    </div>
</template>

<script>
    import Logo from "../assets/myHealthBinLogo.png"

    export default {
        data: function () {
            return {
                Logo: Logo
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>
