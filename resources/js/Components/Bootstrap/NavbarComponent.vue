<template>
    <nav class="navbar navbar-light text-black px-1 py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <slot></slot>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
import { defineComponent } from 'vue';
import MenuComponent from './MenuComponent.vue'
export default defineComponent(
    {
        name: 'NavbarComponent',
        
        data() {
            return {

            };
        }
    }
);
</script>