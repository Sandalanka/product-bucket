<template>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <router-link to="/">productbasket</router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
      <div class="nav-link"> <router-link to="/">Home</router-link></div> 

      </li>
     
        <li class="nav-item ">
    <div class="nav-link"> <router-link to="addproduct">   Add Product</router-link></div>
      </li>
       <li class="nav-item">
      <div class="nav-link"><router-link to="productbasket">Product Basket</router-link></div> 
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <li class="nav-item ">
     <div class="nav-link"> <router-link to="about">About</router-link></div> 
      </li>
        <li class="nav-item ">
      <div class="nav-link"> <router-link to="contact">Contact</router-link></div>
      </li>
    </ul>
  
  </div>
</nav>
</div>
</template>
<script>

    

</script>