<template>
    <div>
        <h2>Agregar Nuevo Producto</h2>
        <form @submit.prevent="addProduct">
            <input v-model="name" placeholder="Nombre" />
            <input v-model="description" placeholder="Descripción" />
            <input v-model="price" type="number" placeholder="Precio" />
            <input v-model="stock" type="number" placeholder="Stock" />
            <button type="submit">Agregar Producto</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            description: '',
            price: '',
            stock: '',
        };
    },
    methods: {
        addProduct() {
            axios.post('/api/products', {
                name: this.name,
                description: this.description,
                price: this.price,
                stock: this.stock,
            })
            .then(() => {
                alert('Producto agregado');
               
            })
            .catch(error => {
                console.error('Error al agregar el producto:', error);
            });
        },
    },
};
</script>

<style scoped>

</style>
