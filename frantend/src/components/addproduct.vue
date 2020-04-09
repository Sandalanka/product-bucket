<template>
    <div class="container">
<h1>Add Product</h1>
<br>
<form class="form-horizantal" @submit.prevent="submitform">
  <div class="form-group">
    <label class="control-label col-sm-2">Product Name</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="name" placeholder="Enter Product Name" required v-model="iteam.name">
       
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Product Quantity</label>
    <div class="col-sm-8">
    <input type="number" class="form-control" name="quantity" placeholder="Enter number of quantity" required v-model="iteam.quantity">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2">Product Price</label>
    <div class="col-sm-8">
    <input type="number" class="form-control" name="price" placeholder="Enter product price" required v-model="iteam.price">
    </div>
  </div>

  
 

  <button type="submit" class="btn btn-primary" v-show="iteam.name && iteam.price && iteam.quantity" >Add Product</button>
</form>
    </div>
</template>

<script>

export default{
    data(){
        return{
            iteam:{
                name:'',
                quantity:0,
                price:0
            }

        }
    },

    methods:{
      submitform(){
        //console.log("here correct");
       
       this.$http.post("http://localhost:8000/api/additeam",this.iteam).then(function(response){console.log(response)})
      }

    }

}

</script>