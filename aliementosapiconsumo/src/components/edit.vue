<template>
    <div>
        <h1>Modificacion de los datos ID:{{id_}}</h1>
        
        <h3>nombre</h3>
        <input type = "text" v-model="nombre"/>

        <h3>tipo</h3>
        <input type = "text" v-model="tipo"/>

        <h3>descripcion</h3>
        <input type = "text" v-model="descripcion"/>

        <h3>fecha de vencimiento</h3>
        <input type = "text" v-model="fecha_vencimiento"/>

        <br>
        <button @click="actualizar">guardar</button>

    </div>
</template>

<script>

export default({
  data(){
        return{
            id_:this.$route.query.id,
            nombre:"",
            descripcion:"",
            tipo:"",
            fecha_vencimiento:""
        }
    },
    mounted(){
        this.get_alimento()
    },
    methods:{
        async get_alimento(){
            var reponse = await fetch("http://127.0.0.1:8000/api/alimento/"+this.id_);
            var datos = await reponse.json();
            var r = datos.data
            this.nombre = r.nombre
            this.descripcion = r.descripcion
            this.tipo = r.tipo
            this.fecha_vencimiento = r.fecha_vencimiento
        },
        async actualizar(){
            var datos ={
                "nombre":this.nombre,
                "descripcion":this.descripcion,
                "tipo":this.tipo,
                "fecha_vencimiento":this.fecha_vencimiento

            }
            var reponse = await fetch("http://127.0.0.1:8000/api/alimento/"+this.id_,{
                "method":"PUT",
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