<template>
    <div class="crear">
        <H1>Crear un nuevo alimentos</H1>
        <H2>{{modificar}}{{id_modificar}}</H2>

    </div>
    
</template>

<script>

export default({
  data(){
        return{
            contador:0,
            alimentos:null,
            modificar:false,
            id_modificar:0,
        }
    },
    

    methods:{

        /*
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
            
        }
        */
    }
})
</script>
