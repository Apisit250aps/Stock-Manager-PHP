

<template>
    <div class="row m-auto overflow-y-hidden">
        <div class="col-lg-1 vh-100 d-none d-lg-block p-0">
            <SidebarComponent>
                <MenuComponent />
            </SidebarComponent>
        </div>
        <div class="col-12 vh-100 col-lg-11 p-0">
            <NavbarComponent>
                <MenuComponent />
            </NavbarComponent>
            <div class="overflow-y-scroll container-fluid vh-100 py-3">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
import NavbarComponent from '../Components/Bootstrap/NavbarComponent.vue';
import SidebarComponent from '../Components/Bootstrap/SidebarComponent.vue';
import MenuComponent from '../Components/Bootstrap/MenuComponent.vue';

import { defineComponent } from 'vue';

export default defineComponent({
    name: 'Layout',
    components: {
        NavbarComponent,
        SidebarComponent,
        MenuComponent
    }
});

</script>