<template>
  <div>
    <button class="bg-black hover:bg-yellow-700 px-4 py-1 text-white rounded-lg text-sm">{{text}}</button>
  </div>
</template>

<script>
export default {
  name: "pmbtn",
  props: ['text']
}
</script>

<style scoped>

</style>
