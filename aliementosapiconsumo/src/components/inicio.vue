<template>
    <div>
        <H1>Lista de alimentos</H1>
        <!--button @click="get_alimentos()">actualizar</button-->
        <div>
            <h2>tabla de datos</h2>
            
            <b-container>
                <b-row>
                    <b-col>
                        ID
                    </b-col>
                    <b-col>
                        nombre
                    </b-col>
                    <b-col>
                        tipo
                    </b-col>
                    <b-col>
                        descripcion
                    </b-col>
                    <b-col>
                        fecha de vencimiento
                    </b-col>
                    <b-col>
                        editar
                    </b-col>
                    <b-col>
                        eliminar
                    </b-col>

                </b-row>
                <div v-for="(item,_) in alimentos" v-bind:key="_">
                    <b-row style="margin:0px">
                        <b-col>
                            {{item.id}}
                        </b-col>
                         <b-col>
                            {{item.nombre}}
                        </b-col>
                        <b-col>
                            {{item.tipo}}
                        </b-col>
                        <b-col>
                            {{item.descripcion}}
                        </b-col>
                        <b-col>
                            {{item.fecha_vencimiento}}
                        </b-col>
                        <b-col>
                            <button @click="editar(item.id)">editar</button>
                        </b-col>
                        <b-col>
                            <button @click="eliminar(item.id)"> eliminar</button>
                        </b-col>
                    </b-row>
                </div>   
            </b-container>
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
