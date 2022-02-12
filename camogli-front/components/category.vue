<template>
<div class="bg-white rounded-full bg-opacity-40 shadow-lg mr-6 ml-6 mb-6 w-min-48 border-2 hover:border-yellow-700 cursor-pointer duration-100 ease-in content flex ">
   <!--<img :src="img" class="object-cover w-8 rounded-l-full" draggable="false" alt="">-->
   <h1 class="font-bold text-center text-lg m-2 select-none pl-4 pr-4">{{name}}</h1>
</div>
</template>

<script>
export default {
  name: "category",
  props: ["name", "img"],
}
</script>

<style scoped>

</style>
