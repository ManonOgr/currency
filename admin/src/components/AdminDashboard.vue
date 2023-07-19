<script></script>
<template>
  <div class="container">
    <h1>Dashboard admin</h1>
    <table>
      <thead>
        <tr>
          <th>Nom de la paire</th>
          <th>Taux de change</th>
          <th>Décompte</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><button class="btn">Modifier</button></td>
          <td><button class="btn">Supprimer</button></td>
        </tr>
      </tbody>
    </table>
    <div>
      <button class="btn add">Ajouter une paire</button>
    </div>
  </div>
</template>

<style>
::before,
::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  height: 100vh;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  display: flex;
  align-items: center;
  flex-direction: column;
}

thead tr {
  background-color: #000;
  color: #fff;
  text-align: left;
}

th,
td {
  padding: 15px 20px;
}

tbody tr,
td,
th {
  border: 2px solid #000;
}

tbody tr:nth-child(event) {
  background-color: #f3f3f3;
}

.add {
  margin-top: 30px;
}
</style>
