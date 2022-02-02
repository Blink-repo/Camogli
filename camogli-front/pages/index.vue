<template>
  <div class="">
    <navbar/>
    <h1 class="text-4xl mx-8 m-4 ">Camogli Mechelen <span class="font-bold">Pasta</span> bar <span class="font-bold">Italiaanse</span>  Gerechten</h1>
    <h1 class="font-bold mx-8 m-2 text-2xl">Food</h1>
    <div class="flex items-center justify-center">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
        <div>
          <card/>
        </div>
        <div>
          <card/>
        </div>
        <div>
          <card/>
        </div>
        <div>
          <card/>
        </div>
        <div>
          <card/>
        </div>
        <div>
          <card/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import pmbtn from "@/components/pmbtn";
import navbar from "@/components/navbar";
import card from "@/components/card";
export default {
  name: 'IndexPage',
  components:{
    pmbtn,
    navbar,
    card
  }
}
</script>
