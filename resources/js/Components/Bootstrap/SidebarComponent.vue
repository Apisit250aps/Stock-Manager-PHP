
<template>
    <div class="vh-100 bg-dark text-white px-2 py-3">
        <div class="">
            <h1 class="text-center fw-bold">Shop</h1>
            <hr>
            <slot></slot>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import MenuComponent from './MenuComponent.vue'
export default defineComponent(
    {
        name:"SidebarComponent",
        
    }
);
</script>