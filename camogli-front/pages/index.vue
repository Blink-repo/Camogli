<template>
  <div class="h-screen flex flex-col">
    <div class="bg-black text-white py-3.5 px-6 h-1/3 shadow items-center">
        <h1 class="text-2xl font-semibold top-0 left-0">Camogli</h1>
    </div>
    <div class="">
      <div class="flex items-center justify-center rounded-full relative -top-5" >
        <div class="flex border-2 border-gray-500 rounded-full shadow-lg shadow-gray-500/50  border-5 lg:w-8/12 w-96">
          <input type="text" class="px-4 py-2 rounded-full w-full" placeholder="Search bitches in the neighbourhood...">
        </div>
      </div>
      <div v-dragscroll class="flex items-center gap-4 overflow-hidden">
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
        <category/>
      </div>
      <div class="flex item-center ">
        <h1 class="m-3 text-2xl font-semibold">Populaire gerechten</h1>
        <pmbtn text="bekijk alles" class=" m-3"/>
      </div>
      <div v-dragscroll class="flex items-center overflow-hidden">
        <div class="w-50" v-for="item in items" :key="item.id">
          <card :name="item.name" :price="item.price"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import pmbtn from "@/components/pmbtn";
import card from "@/components/card";
import category from "@/components/category";
import navbar from "@/components/category";
import { dragscroll } from 'vue-dragscroll';

export default {
  name: 'IndexPage',
  components:{
    pmbtn,
    card,
    category,
    navbar,
  },
  directives: {
    dragscroll
  },
  data(){
    return{
      items: []
    }
  },
  async mounted() {
    await this.getItems();

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
    }
  }
}
</script>

