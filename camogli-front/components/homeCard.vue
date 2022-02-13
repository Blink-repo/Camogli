<template>
 <div class="background w-full bg-yellow-700 rounded-2xl bg-opacity-40 hover:shadow-lg duration-100 ease-in cursor-pointer">
   <div class="grid grid-cols-2">
      <div>
        <h1 class="m-4 text-2xl text-black-700 font-semibold top-0 mt-4">Wij zijn <span class="text-green">open</span></h1>
                <h1 class="m-4 text-2xl text-black-700 font-semibold top-0 mt-4">i know this ugly but fk u x</h1>

        <nuxt-link to="/shop2"><pmbtn class="m-4 flex " text="shop nu"/></nuxt-link>
      </div>
     <img src="../assets/images/pasta.png" alt="" class="w-full h-40 object-cover rounded-t-2xl" draggable="false">
        </div>

 </div>
</template>

<script>

import pmbtn from "@/components/pmbtn"
export default {
  name: "homeCard",
  components:{
    pmbtn
  }
}
</script>

<style> 
.background{
  background: url("assets/Images/Wave-1.svg") no-repeat;
  background-size: cover;
}


</style>
