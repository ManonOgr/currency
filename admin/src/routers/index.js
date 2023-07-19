import { createRouter, createWebHistory } from 'vue-router'


import LoginView from '@/views/LoginView.vue'
import CurrenciesView from '@/views/CurrenciesView.vue'
import AdminView from '@/views/AdminView.vue'
import ConvertView from '@/views/ConvertView.vue'


const router = createRouter({
  history: createWebHistory(),
  routes: [
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

    
  ]
})

export default router
