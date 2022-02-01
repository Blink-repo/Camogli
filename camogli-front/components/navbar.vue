<template>
  <div class="bg-black text-white py-3.5 px-6 shadow md:flex justify-between items-center">

    <h1 class="text-2xl font-semibold">Camogli</h1>

    <span @click="open = !open" class="absolute md:hidden right-6 top-1.5 cursor-pointer text-4xl">
      <i :class="[open ? 'bi bi-x' : 'bi bi-filter-left']"></i>
    </span>

    <ul class="md:flex md:items-center md:px-0 px-3 md:pb-0 md:static absolute
                bg-black md:w-auto w-full top-14 duration-700 ease-in"
        :class="[open ? 'left-0' : 'hidden']">
      <li class="md:mx-4 md:my-0 my-6" v-for="link in links">
        <a :href="link.link" class="text-lg hover:bg-white rounded-full px-4 hover:text-black">{{ link.name }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
import "bootstrap-icons/font/bootstrap-icons.css";

export default {
  name: 'navbar',
   data(){
      return{
        links: [],
        open: false,
      }
   },
  mounted() {
    this.links = [
      {name: "Home", link: "#"},
      {name: "About", link: "#"},
      {name: "Food", link: "#"},
      {name: "Contact", link: "#"},
    ]
  }
}
</script>
