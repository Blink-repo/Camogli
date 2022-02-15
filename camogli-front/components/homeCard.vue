<template>
 <div class="background w-full rounded-2xl bg-opacity-70 hover:shadow-lg duration-100 ease-in cursor-pointer">
   <div class="grid grid-cols-2">
      <div class="ml-3">
        <h1 class="m-3  text-lg sm:text-2xl text-gray-300 font-semibold top-0 mt-4">Wij zijn <span class="text-green-500">{{status}}</span></h1>
                <h1 class="m-3 pb-10 md:pb-8 text-lg sm:text-2xl text-gray-300 font-semibold top-0 mt-4">{{time}}</h1>
        <nuxt-link to="/shop2"><button class="m-3 flex rounded-2xl bg-opacity-30 bg-gray-200 p-1 pl-2 pr-3 text-white hover:bg-opacity-90 duration-100 ease-in hover:text-black">Shop nu</button></nuxt-link>
      </div>
     <img src="../assets/Images/pasta_radijs.png" alt="" class="flex container w-full w-56 h-52 object-contain  " draggable="false">
        </div>
 </div>
</template>

<script>

import pmbtn from "@/components/pmbtn"
export default {
  name: "homeCard",
  props: ['status', 'time'],
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
