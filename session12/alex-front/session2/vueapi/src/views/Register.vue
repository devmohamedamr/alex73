<template>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <form class="form-group" @submit="userdata">
                <input placeholder="name" class="form-control" v-model="name" type="text"  />
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
        name:"Register",
        data(){
            return {
                name:"",
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
            async userdata(e){
                e.preventDefault();
                let user  = {name:this.name,email:this.email,password:this.password}
                // axios.post("http://127.0.0.1:8000/api/register",user).then( (res)=>{
                //       console.log(res);  
                // } );
                let res = await  axios.post("http://127.0.0.1:8000/api/register",user);
                if(res.data.status == 201){
                    this.$router.push("/login");
                }
            }
        }
    }
</script>


<style></style>