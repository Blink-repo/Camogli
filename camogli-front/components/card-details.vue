<template>
  <div class="absolute h-screen w-screen">
    <div class="h-1/4 bg-transparent duration-700 ease-in">
    </div>
    <div class="flex justify-center">
      <div class="p-5 h-screen sm:h-5/6 sm:w-5/6 lg:w-4/6 xl:w-3/6 2xl:w-2/6 w-screen bg-white rounded-t-3xl rounded-3xl shadow-2xl">
        <i v-on:click="close" class="text-right bi bi-x cursor-pointer"></i>

        <div class="h-3/6 flex justify-center">
          <img :src="item.image" class="object-cover h-96 w-full rounded-2xl shadow-2xl">
        </div>
        <div class="h-3/6 mt-8">
          <h1 class="clear-both m-4 text-4xl">{{item.name}}</h1>
          <p class="text-gray-500 m-5">{{item.description}}</p>
          <div class="flex m-4">
            <div class="custom-number-input mt-auto">
              <div class="flex w-full rounded-lg relative bg-transparent mt-1">
                <button @click="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full px-5 py-4 w-20 rounded-l-xl cursor-pointer outline-none">
                  <span class="m-auto text-2xl font-thin">−</span>
                </button>
                <div type="number" class="text-center outline-none focus:outline-none w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none items-center justify-center  " name="custom-input-number"><h1>{{count}}</h1></div>
                <button @click="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full px-4 py-4 w-20 rounded-r-xl cursor-pointer">
                  <span class="m-auto text-2xl font-thin">+</span>
                </button>
              </div>
            </div>
            <button class="bg-black hover:bg-yellow-700 text-white text-lg rounded-xl ml-4 w-full">Toevoegen <span class="p-4">${{total_price}}</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "card-details",
  props: {
    item: [],
  },
  data(){
    return{
      show: false,
      count: 1,
      total_price: 0
    }
  },
  mounted() {
  },
  methods: {
  increment () {
    this.count += 1;
  },
  decrement () {
    if(this.count > 0){
    this.count -= 1;
    }
  },
  close (){
    this.count = 1;
    this.$emit('close');
  }
},
  watch: {
    item: function (newVal, oldVal) {
      console.log("Prop changed: ", newVal, " | was: ", oldVal);
      this.total_price = this.item.price;
    },
    count: function (newVal, oldVal){
      this.total_price = Number(this.item.price * newVal).toFixed(2);
    }
  },
}
</script>

<style>
input[type='number']::-webkit-inner-spin-button,
input[type='number']::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] {
  -moz-appearance: textfield;
}

.custom-number-input input:focus {
  outline: none !important;
}

.custom-number-input button:focus {
  outline: none !important;
}
</style>
