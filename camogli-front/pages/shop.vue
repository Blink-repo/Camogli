<template>

<div class="">
<div class="flex item-center justify-center textcolor-white mt-4">Camogli</div>
<div v-dragscroll class="flex items-center gap-3 overflow-hidden">
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
</div>
</template>

<script>
import category from "@/components/category";
import { dragscroll } from 'vue-dragscroll';

export default {
    name: 'shop',
    components:{
        category
    },
    directives:{
        dragscroll
    }
}
</script>