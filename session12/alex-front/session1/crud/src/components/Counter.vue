<template>
    <h1>count is : {{ count }}</h1>
    <button @click="increment">click</button>
</template>

<script>
    export default {
        name:"Counter",
        data(){
            return {
                count:1
            }
        },
        methods:{
            increment(){
                ++this.count
                console.log(this.count);
            }
        }
    }
</script>

<style></style>