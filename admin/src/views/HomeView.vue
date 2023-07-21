<script setup></script>

<template>
  <div class="container">
    <nav>
        <v-btn variant="tonal"> Connexion </v-btn>
    </nav>
    <h1>Bienvenue sur l'API REST de Money Value</h1>
    <br />
    <p>Sur cette Api il y'a une partie publique ainsi qu'une partie admin.</p>
    <br />
    <div>
      <ul>
        Partie publique
        <li>Conversion via une Url</li>
        <li>Affichage des pairs disponible via une Url</li>
      </ul>
      <br />
      <ul>
        Partie admin
        <li>Connexion</li>
        <li>Tableau avec suppression / ajout / modification</li>
        <li>Page d'informations de devices : nom / symbol / code</li>
        <li>Déconnexion</li>
      </ul>
    </div>
    <div>
        <v-btn variant="tonal"> Documentation </v-btn>
    </div>
    </div>
</template>

<style>
nav{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}
.container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>
