<template>
    <div>
        <tool-bar></tool-bar>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import ToolBar from "./ToolBar";
    import AppFooter from "./AppFooter";
    export default {
        name: "AppHome",
        components: {AppFooter, ToolBar}
    }
</script>

<style scoped>

</style>