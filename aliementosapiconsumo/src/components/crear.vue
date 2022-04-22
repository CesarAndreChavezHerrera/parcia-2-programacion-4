<template>
    <div class="crear">
        <H1>Crear un nuevo alimentos</H1>
        <div>
            <h3>Nombre</h3>
            <input type = "text" v-model="nombre"/>

            <h3>Tipo</h3>
            <input type = "text" v-model="tipo"/>

            <h3>Descripcion</h3>
            <input type = "text" v-model="descripcion"/>

            <h3>Fecha de vencimiento</h3>
            <input type = "text" v-model="fecha_vencimiento"/>

            <br>
            <button @click="save">Guardar</button>

        </div>

    </div>
    
</template>

<script>

export default({
  data(){
        return{
            
            nombre:"",
            descripcion:"",
            tipo:"",
            fecha_vencimiento:""
        }
    },
    

    methods:{
        async save(){
            var datos ={
                "nombre":this.nombre,
                "descripcion":this.descripcion,
                "tipo":this.tipo,
                "fecha_vencimiento":this.fecha_vencimiento

            }
            var reponse = await fetch("http://127.0.0.1:8000/api/alimento/save",{
                "method":"POST",
                headers:{
                    'Content-Type':'application/json'
                },
                body: JSON.stringify(datos)
                
            });
            console.log(reponse)
        }

    }
})
</script>
