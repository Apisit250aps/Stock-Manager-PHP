<script async setup>
defineProps(
    {
        type: String,
        id: String,
        placeholder: String,
        label: String,
        class: String,
        values: String
    }
);

defineEmits(['update:values']);

</script>

<template>
    <div class="form-floating">
        <input class="form-control" :type="type" :value="values" :class="class" :id="id" :placeholder="placeholder"
            @input="$emit('update:values', $event.target.value)" />
        <label :for="id">{{ label }}</label>
    </div>
</template>
