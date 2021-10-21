<template>
    <button @click="$router.push(page)" :style="{background: color}" class="button">{{text}}</button>
</template>

<script>
export default {
    name: 'SidebarButton',
    props: {
        text: String,
        color: String,
        page: String
    }
}
</script>