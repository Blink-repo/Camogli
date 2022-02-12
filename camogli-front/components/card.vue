<template>
 <div class="bg-white rounded-2xl bg-opacity-40 hover:shadow-lg w-56 m-2 duration-100 ease-in pb-2 cursor-pointer">
   <img :src="img" alt="" class="w-full h-40 object-cover rounded-t-2xl" draggable="false">
   <h1 class="font-bold text-md m-4">{{name}}</h1>
   <div class="grid grid-cols-2 gap-4">
     <h1 class="text-left ml-4">${{price}}</h1>
     <i class="bi bi-plus-circle-fill text-right mr-4"></i>
   </div>
 </div>
</template>

<script>
export default {
  name: "card",
  props: ['name', 'price', 'img']
}
</script>

<style scoped>

</style>
