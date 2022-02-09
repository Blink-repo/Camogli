<template>
<div class="">
  <div class="h-screen">
    <div class="bg-black text-white py-3.5 px-6 h-1/2 shadow md:flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-bal top-0 left-0">Camogli</h1>
 </div>
    <div class="flex items-center justify-center rounded-full relative -top-5" >
    <div class="flex border-2 border-gray-200 rounded-full shadow-lg shadow-gray-500/50  border-5 border-indigo-500 lg:w-8/12 w-96">
        <input type="text" class="px-4 py-2 rounded-full w-full" placeholder="Search bitches in the neighbourhood...">
    </div>
</div>
      <div class="flex items-center gap-10 overflow-x-auto m-4">
          <category/>
          <category/>
          <category/>
          <category/>
          <category/>
        
      </div>
      <div class="flex item-center"> 
        <h1 class="m-3 text-2xl font-semibold">Populaire gerechten</h1>
       <pmbtn text="bekijk alles"/>
      </div>
      <div class="flex items-center overflow-x-auto">
            <div class="w-50"> 
              <card/>
            </div>
            <div class="w-50"> 
              <card/>
            </div>
            <div class="w-50"> 
              <card/>
            </div>
            <div class="w-50"> 
              <card/>
          </div>
           <div class="w-50"> 
              <card/>
            </div>
            <div class="w-50"> 
              <card/>
            </div>
            <div class="w-50"> 
              <card/>
            </div>
            <div class="w-50"> 
              <card/>
          </div>
        </div>
    </div>
  </div>
</template>
<script>
import pmbtn from "@/components/pmbtn";
import card from "@/components/card";
import category from "@/components/category";
export default {
  name: 'IndexPage',
  components:{
    pmbtn,
    card,
    category
  
    navbar,
    card
  },
  data(){
    return{
      items: []
    }
  },
  async mounted() {
    this.getItems();

  },
  methods:{
    async getItems() {
      await this.$axios
        .$get('/api/items', {
          headers: { "Access-Control-Allow-Origin": "*" }
        })
        .then(r => {
          for (let e of r){
            this.items.push(e);
          }
        });
    }

  }
}
</script>

