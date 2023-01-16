<template>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <form class="form-group" @submit="login">
                <input placeholder="email" class="form-control" v-model="email" type="email"  />
                <input placeholder="password" class="form-control" v-model="password" type="password"  />
                <input class="btn btn-success" type="submit" value="send"/>
            </form>
        </div>
    </div>
    </div>
</template>


<script>
import axios from 'axios'

    export default {
        name:"Login",
        data(){
            return {
                email:"",
                password:""
            }
        },
        mounted(){
            let token =  localStorage.getItem("token");

            if(token !== null){
                this.$router.push("/category");
           }
        },
        methods:{
            async login(e){
                e.preventDefault();
                let user  = {email:this.email,password:this.password}
               let res = await axios.post("http://127.0.0.1:8000/api/login",user);
               localStorage.setItem("token",res.data.token); 
               console.log(res.data.token);
               this.$router.push("/category");

            }
        }
    }
</script>


<style></style>