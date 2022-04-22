<template>
    <div>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head> 
        <H1>Lista de alimentos</H1>
        <!--button @click="get_alimentos()">actualizar</button-->
        <div>

            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha de Vencimiento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item,_) in alimentos" v-bind:key="_">
                    
                    <th scope="col">{{item.id}}</th>
                    <th scope="col">{{item.nombre}}</th>
                    <th scope="col">{{item.tipo}}</th>
                    <th scope="col">{{item.descripcion}}</th>
                    <th scope="col">{{item.fecha_vencimiento}}</th>
                    <th scope="col"><button @click="editar(item.id)" type="button" class="btn btn-success">Editar</button></th>
                    <th scope="col"><button @click="eliminar(item.id)" type="button" class="btn btn-danger"> Eliminar</button></th>

                </tr>
            </tbody>
            </table>
         
        </div>

    </div>
    
</template>

<script>



export default ({

    data(){
        return{
            contador:0,
            alimentos:null,
            size: 0
        }
    },
    mounted(){
        this.get_alimentos()
    },

    methods:{

        async get_alimentos(){
            var reponse = await fetch("http://127.0.0.1:8000/api/alimento");
            var datos = await reponse.json();
            //var alimentos = r.json()
            this.alimentos = datos.data

            console.log(this.alimentos)
        },
        async eliminar(id){
            console.log(id)
            
            var reponse = await fetch("http://127.0.0.1:8000/api/alimento/"+id,{
                "method":"DELETE"
            });
            console.log(reponse)
            this.get_alimentos()
            
        },
        editar(id_){

            console.log("funciona")
            this.$router.push({path:"/editar", query:{id:id_}})
        }
        

        
    }
})
</script>

