<template>
<div class="bg-gray-300 rounded-full bg-opacity-40 hover:shadow-lg m-6 w-min-48 cursor-pointer duration-100 ease-in content flex">
   <img :src="img" class="object-cover w-8 rounded-l-full" draggable="false" alt="">
   <h1 class="font-bold text-center text-lg m-2 select-none pr-8">{{name}}</h1>
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
