<template>
  <div class="bg-black text-white py-3.5 px-6 shadow md:flex justify-between items-center">

    <h1 class="text-2xl font-semibold">Camogli</h1>

    <span @click="open = !open" class="absolute md:hidden right-6 top-1.5 cursor-pointer text-4xl">
      <i :class="[open ? 'bi bi-x' : 'bi bi-filter-left']"></i>
    </span>

    <ul class="md:flex md:items-center md:px-0 px-3 md:pb-0 md:static absolute
                bg-black md:w-auto w-full duration-500 ease-in-out top-14 overflow-hidden left-0"
        :class="[open ? 'bottom-0' : 'bottom-full']">
      <li class="md:mx-4 md:my-0 my-6 hover:bg-white hover:text-black rounded-lg duration-100 ease-in " v-for="link in links">
        <a :href="link.link" class="text-lg px-4">{{ link.name }}</a>
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
