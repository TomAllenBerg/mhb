<template>
    <button class="squareButton" @click="clearSessionID()">
    <img class="pageImage" :src="require(`../assets/sidebarLogos/${imageSource}`)" /><br/>

    <span class="buttonText">{{text}}</span>
    </button>
</template>

<script>
export default {
    name: 'LogoutButton',
    props: {
        text: String,
        page: String,
        imageSource: String
    },

    methods: {
        clearSessionID() {
            // Destroys the session of the logged in user effectively logging them out.
            this.$session.remove("sessionID");

            // Reroutes to the login page after logging out.
            this.$router.push('login')
        }
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
    position: fixed;
    bottom: 0;
    left: 0;
}

.pageImage{
    max-width: 50px;
    max-height: 50px;
    position: relative;
    left: -8px;
}

.buttonText{
    position: absolute;
    bottom: 2%;
    width: 100%;
    left: 0%;
    color: #7F4E39;
}
</style>
