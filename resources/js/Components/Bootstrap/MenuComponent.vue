<template>
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="" class="btn btn-outline-success">log in</a>
            </li>
        </ul>
</template>
<!-- setup -->
<script>
import { defineComponent } from 'vue';


export default defineComponent(
    {
        name:'MenuComponent'
    }
);
</script>
