<template>
<div class="h-screen w-screen">
     <div class="background text-white py-3.5 px-6 h-1/5 lg:h-1/4 items-center">
        <h1 class="text-2xl font-semibold top-0 items-center">Camogli</h1>
    </div>
    <div class="">
    <div v-dragscroll class="flex gap-1 items-center sm:justify-center overflow-hidden">
        <category v-for="category in categories" :key="category.id" :name="category.name" :img="category.image"/>
    </div>
    <div class="ml-5 mr-5">
    <h1 class="m-3 text-2xl font-bold">Onze gerechten</h1>
     <div v-dragscroll  class="grid grid-cols-2 sm:grid-cols-3 bg-gray-100 rounded-3xl ">
        <div class="flex items-center justify-center" v-for="item in items" :key="item.id">
          <card :name="item.name" :price="item.price" :img="item.image"/>
        </div>
     </div>
    </div>
  </div>
  </div>




</template>

<script>
import category from "@/components/category";
import { dragscroll } from 'vue-dragscroll';
import card from "@/components/shopCard";

export default {
    name: 'shop',
    components:{
        category,
        card
    },
    directives:{
        dragscroll
        
    },
    data(){
        return{
            items: [],
            categories: []
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