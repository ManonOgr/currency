<template>
  <nav>
    <v-btn variant="tonal"><a href="/admin/login">Deconnexion</a> </v-btn>
    <v-btn variant="tonal"><a href="/add"> Ajout</a> </v-btn>
    <v-btn variant="tonal"> <a href="/currency">Devises</a></v-btn>
  </nav>
</template>

<style>
nav {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
  padding-top: 30px;
}
</style>
