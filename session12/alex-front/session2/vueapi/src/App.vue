<script>
import { RouterLink, RouterView } from 'vue-router'
export default {
  name:"App",
  data(){
    return {
        token:""
    }
  },
  mounted(){
    let token =  localStorage.getItem("token");
    this.token = token;
  }
}
</script>

<template>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li v-if="token == null"  class="nav-item">
          <RouterLink class="nav-link" to="register">register</RouterLink>
        </li>
        <li v-if="token == null"  class="nav-item">
          <RouterLink class="nav-link" to="login">login</RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="nav-link" to="category">category</RouterLink>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <RouterView />
</template>

<style scoped>
</style>
