<template>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <nav class="nav justify-content-center">
    <div class="nav justify-content-center">
      <span class="navbar-brand mb-0 h1"><router-link to ="/"><button type="button" class="btn btn-success">Inicio</button></router-link></span>
      <span class="navbar-brand mb-0 h1"><router-link to="/crear" modificar = true><button type="button" class="btn btn-success">Nuevo Dato</button></router-link></span>
    </div>
  </nav>
  <router-view/>
</template>


<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>

