<template>
  <div class="h-screen w-screen bg-gray-200 overflow-x-scroll">
    <div class=" rounded-b-3xl bg-gray-100 text-black py-3.5 px-6 h-1/5 lg:h-1/6 content-center">
      <div class="flex justify-between items-center align-center">
        <h1 class="text-2xl text-yellow-700 font-semibold top-0 mt-4">Camogli</h1>
        <button v-on:click="show = !show"><i class="bi bi-search text-yellow-700 hover:text-3xl"></i>
        </button>
      </div>
      <h1 class="font-semibold top-0 items-center pb-3">Verse Italiaanse gerechten</h1>
    </div>

    <div class="flex items-center justify-center rounded-xl relative duration-300 ease-in" :class="[show ? '-top-5' : 'top-0']" >
      <div class="flex rounded-xl lg:w-8/12 w-11/12">
        <input type="text" class="px-4 py-2 rounded-xl w-full shadow-lg shadow-gray-500/50 duration-300 ease-in"
               :class="[show ? 'opacity-100' : 'opacity-0']" placeholder="Search bitches in the neighbourhood...">
      </div>
    </div>

    <div class="bg-gray-200">
      <div v-dragscroll class="flex items-center gap-4 overflow-hidden">
        <category v-for="category in categories" :key="category.id" :name="category.name" :img="category.image"/>
      </div>
      <div class="rounded-tr-3xl mb-14">
        <h1 class="ml-5 text-2xl font-bold">Ons <span class="text-yellow-700">Menu</span></h1>
        <div v-for="category in categories" :key="category.id">
          <div class="flex justify-between">
            <h1 class="m-5 text-2xl font-semibold">{{category.name}}</h1>
          </div>
          <div v-dragscroll class="flex items-center overflow-hidden">
            <div v-on:click="getSelectedItem(item.id)" class="w-50" v-for="item in items" :key="item.id">
              <card class="ml-5" :name="item.name" :price="Number(item.price).toFixed(2)" :img="item.image" v-if="category.id === item.category_id"/>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
    <floating-navbar class="fixed bottom-2"/>
    </div>
      <div v-show="card_details" class="fixed duration-300 ease-in -top-20">
        <card-details :item="selected" @close="closeCard"/>
      </div>
    </div>
  </div>
</template>

<script>
import category from "@/components/category";
import { dragscroll } from 'vue-dragscroll';
import scard from "@/components/shopCard";
import card from "@/components/card";
import floatingCart from "@/components/floatingShoppingCart";
import homeCard from "@/components/homeCard";

export default {
    name: 'shop',
    components:{
        category,
        card,
        scard,
        floatingCart,
        homeCard
    },
    directives:{
        dragscroll,
    },
    data(){
        return{
          items: [],
          categories: [],
          selected: [],
          show: false,
          card_details: false,
        }
    },
    async mounted()
    {
        await this.getItems();
        await this.getCategories();
    },
    methods:{
      closeCard (){
        this.card_details = false;
      },
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
    },
    getSelectedItem(id){
      for (let i = 0; i < this.items.length; i++){
        if(this.items[i].id === id){
          this.selected = this.items[i];
        }
      }
      console.log(this.selected);
      this.card_details = true;
      return this.selected
    }
}}
</script>
<style>



</style>
