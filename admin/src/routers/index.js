import { createRouter, createWebHistory } from 'vue-router'

import HomeView from '@/views/HomeView.vue'
import LoginView from '@/views/LoginView.vue'
import CurrenciesView from '@/views/CurrenciesView.vue'
import AdminView from '@/views/AdminView.vue'
import EditPairs from '@/views/EditPairsView.vue'
import ConvertView from '@/views/ConvertView.vue'
import AddPairs from '@/views/AddPairsView.vue'


const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/admin/login',
      name: 'login',
      component: LoginView
    },
    {
      path: "/currency",
      name: "currency",
      component: CurrenciesView
    },
    {
      path: "/admin",
      name: "admin",
      component: AdminView
    },
    {
      path: "/convert",
      name: "convert",
      component: ConvertView
    },
    {
      path: "/edit/:id",
      name: "edit",
      component: EditPairs,
      props: true
    },
    {
      path: "/add/:id",
      name: "add",
      component: AddPairs,
      props: true
    },

    
  ]
})



export default router
