<template>
    <p v-for="tipo in tipos" :key="tipo.id">
        {{tipo.nombre}}
    </p>
</template>
<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

export default defineComponent({
    components: {
        AppLayout
    },
    props: {
        tipos: Array
    }
})
</script>

