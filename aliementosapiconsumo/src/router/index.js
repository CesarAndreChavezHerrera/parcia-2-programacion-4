import { createRouter, createWebHistory } from 'vue-router'
//import Home from '../views/Home.vue'
import Inicio from '../views/Inicio.vue'
import Crear from '../views/Crear.vue'
import Editar from '../views/Edit.vue'

const routes = [
  {
    path: '/',
    name: 'inicio',
    component: Inicio
  },
/*
  {
    path: '/inicio',
    name: 'inicio',
    component:Inicio
  },
  
*/
{
  path: '/crear',
  name: 'crear',
  component:Crear
},
{
  path: '/editar',
  name: 'editar',
  component:Editar
},
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
