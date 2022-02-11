<template>
<div class="bg-gray-200 h-screen w-screen">
     <div class=" rounded-b-3xl  bg-gray-100 text-black py-3.5 px-6 h-1/6 lg:h-1/4 content-center">
        <div class="flex justify-between items-center align-center">
        <h1 class="text-2xl text-yellow-700 font-semibold top-0 mt-4">Camogli</h1>
        <button v-on:click="show = !show"><i class="bi bi-search" style="color:#a16207"></i>
        </button>

        </div>
        <h1 class="font-semibold top-0 items-center pb-3">Verse Italiaanse gerechten</h1>

    </div>
     <div class="flex items-center justify-center rounded-xl relative -top-5" >
        <div class="flex rounded-xl shadow-lg shadow-gray-500/50 lg:w-8/12 w-96">
          <input v-show="show" type="text" class="px-4 py-2 rounded-xl w-full" placeholder="Search bitches in the neighbourhood...">
          <i v-show="!show"></i>
          
        </div>
      </div>


      
    

    <div class="ml-5 mr-5 rounded-tr-3xl">
        <h1 class="m-3 text-2xl font-bold">Ons <span class="text-yellow-700">Menu</span></h1>
        <div class="flex justify-between">
        <h1 class="m-3 text-2xl font-semibold">Pasta</h1>
            <div class="flex items-center justify-center">
            <pmbtn text="bekijk alles" class=""/>
            <i class="bi bi-caret-right-fill" style="color:#a16207"></i>
            </div>
        </div>
     <div v-dragscroll class="flex items-center overflow-hidden">
        <div class="w-50" v-for="item in items" :key="item.id">
          <scard :name="item.name" :price="item.price" :img="item.image"/>
        </div>
      </div>
    </div>
    <div class="ml-5 mr-5">
        <div class="flex justify-between">
        <h1 class="m-3 text-2xl font-semibold">Salade</h1>
            <div class="flex items-center justify-center">
            <pmbtn text="bekijk alles" class=""/>
            <i class="bi bi-caret-right-fill" style="color:#a16207"></i>
            </div>
        </div>
     <div v-dragscroll class="flex items-center overflow-hidden">
        <div class="w-50" v-for="item in items" :key="item.id">
          <scard :name="item.name" :price="item.price" :img="item.image"/>
        </div>
      </div>
    </div>
    <floatingCart class="fixed bottom-0 right-0"/>

</div>



</template>

<script>
import category from "@/components/category";
import { dragscroll } from 'vue-dragscroll';
import scard from "@/components/shopCard";
import card from "@/components/card";
import floatingCart from "@/components/floatingShoppingCart";
export default {
    name: 'shop',
    components:{
        category,
        card,
        scard,
        floatingCart
    },
    directives:{
        dragscroll
        
    },
    data(){
        
        return{
            items: [],
            categories: [],
            show: false
        }
    },
    async mounted()
    {
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
}}
</script>
<style>
.background{
  background: url("assets/Images/wave-5.svg") no-repeat;
  background-size: cover;
}

</style>