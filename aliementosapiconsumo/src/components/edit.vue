<template>
    <div>
        <h1>Modificacion de los datos ID:{{id_}}</h1>
        <div class="nav justify-content-center">
        <div>
        <tr >
            <td>
                <h3>Nombre</h3>
            </td>
            <td>
                <input type = "text" v-model="nombre"/>
            </td>
        </tr>
        
        <tr >
            <td>
                <h3>Tipo</h3>
            </td>
            <td>
                <input type = "text" v-model="tipo"/>
            </td>
        </tr>
        

        <tr >
            <td>
                <h3>Descripcion</h3>
            </td>
            <td>
                <input type = "text" v-model="descripcion"/>
            </td>
        </tr>

       <tr >
            <td>
                <h3>Fecha de vencimiento</h3>
            </td>
            <td>
                <input type = "text" v-model="fecha_vencimiento"/>
            </td>
        </tr>
        </div>
        </div>
       

        <br>
        <button @click="actualizar" class="btn btn-success">Guardar</button>

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