<script setup>
import Layout from './Layout.vue';
import InputFloat from '../Components/Bootstrap/Forms/InputFloat.vue';

let name = "";

</script>

<template>
    <Layout>
        <InputFloat id="email" type="email" placeholder="email" label="Email" v-model="name" />
    </Layout>
</template>