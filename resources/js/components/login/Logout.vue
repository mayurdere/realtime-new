<template>
    
</template>

<script>
export default {
    created(){
        EventBus.$emit('logout'); //Event bus is created in App.js and viewed on toolbar
    }
}
</script>

<style>

</style>
