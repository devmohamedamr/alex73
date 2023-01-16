<template>
    <h1>home page</h1>
    <Navbar />
    <Counter />
</template>

<script>
    import Counter from '../components/Counter.vue';
    import Navbar from '../components/Navbar.vue';
    export default {
        name:"Home",
        components:{
            Counter,
            Navbar
        }
    }
</script>


<style></style>