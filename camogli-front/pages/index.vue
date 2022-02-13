<template>
  <div class="h-screen flex flex-col bg-gray-200">
    <div class="py-3.5 px-6 lg:h-2/6 items-center bg-gray-100 rounded-b-3xl">
    <div class="flex justify-between items-center align-center">
        <h1 class="text-2xl text-yellow-700 font-semibold top-0 mt-4">Camogli</h1>
        <button v-on:click="show = !show"><i class="bi bi-search text-yellow-700 hover:text-3xl"></i>
        </button>
        
      </div>
      <h1 class="font-semibold top-0 items-center pb-3">Verse Italiaanse gerechten</h1>

 <div class="flex justify-center items-center align-center">
      <div class="mt-3 pb-1 w-11/12 h-48">
        <homeCard status="open" time="tot 19h"/>
      </div>
      </div>
    </div>
    
    <div class="bg-gray-200">
      <div class="flex items-center justify-center rounded-xl relative duration-800 ease-in" :class="[show ? '-top-5' : '-top-5']" >
      <div class="flex rounded-xl lg:w-8/12 w-96">
        <input type="text" class="px-4 py-2 rounded-xl w-full shadow-lg shadow-gray-500/50 duration-300 ease-in"
               :class="[show ? 'opacity-100' : 'opacity-0']" placeholder="Search bitches in the neighbourhood...">
      </div>
    </div>
      <div v-dragscroll class="flex items-center gap-4 overflow-hidden">
        <category v-for="category in categories" :key="category.id" :name="category.name" :img="category.image" v-if="category.featured"/>
      </div>
      <div class="flex item-center ">
        <h1 class="m-3 text-2xl font-semibold">Populaire gerechten</h1>
        <div class="flex items-center justify-center">
          <nuxt-link to="/shop2"><pmbtn text="bekijk alles" class=""/></nuxt-link>
          <i class="bi bi-caret-right-fill" style="color:#a16207"></i>
        </div>
      </div>
      <div v-dragscroll class="flex items-center overflow-hidden">
        <div class="w-50" v-for="item in items" :key="item.id" v-if="item.featured">
          <card :name="item.name" :price="item.price" :img="item.image"/>
        </div>
      </div>
      <div class="flex justify-center">
        <floating-navbar class="absolute bottom-10 "/>
      </div>
    </div>
  </div>

</template>

<script>
import pmbtn from "@/components/pmbtn";
import card from "@/components/card";
import category from "@/components/category";
import navbar from "@/components/category";
import floatingNavbar from "@/components/floatingNavbar";
import { dragscroll } from 'vue-dragscroll';

export default {
  name: 'IndexPage',
  components:{
    pmbtn,
    card,
    category,
    navbar,
    floatingNavbar,
  },
  directives: {
    dragscroll
  },
  data(){
    return{
      items: [],
      categories: [],
      show: false
    }
  },
  async mounted() {
    await this.getItems();
    await this.getCategories();

  },
  methods:{
    async getItems() {
      try {
        await this.$axios
          .$get('/api/items', {
            headers: { "Access-Control-Allow-Origin": "*" }
          })
          .then(r => {
            for (let e of r){
              this.items.push(e);
            }
          });
      }catch (e) {

      }
    },
    async getCategories() {
      try {
        await this.$axios
          .$get('/api/categories', {
            headers: { "Access-Control-Allow-Origin": "*" }
          })
          .then(r => {
            for (let e of r){
              this.categories.push(e);
            }
          });
      }catch (e) {

      }
    }
  }
}
</script>

<style>
.background{
  background: url("assets/Images/wave-1.svg") no-repeat;
  background-size: cover;
}

</style>
