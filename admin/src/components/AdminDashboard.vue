<script>
import axios from "axios";

const URL = "http://localhost:8000/api/pairs";
const URLCurrencies = "http://localhost:8000/api/currencies";
const URLConversions = "http://localhost:8000/api/conversions";

export default {
  name: "AdminDashboard",
  data() {
    return {
      convert_data:"",
      curr_data: "",
      pairs_data: "",
    };
  },
  async mounted() {
    await axios.get(URL).then((response) => {
      this.pairs_data = response.data;
      console.log(this.pairs_data);
    });

    await axios.get(URLCurrencies).then((response) => {
      this.curr_data = response.data;
      console.log(this.curr_data);
    });
    await axios.get(URLConversions).then((response) => {
      this.convert_data = response.data;
      console.log(this.convert_data);
    });
  },
};
</script>
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
      <tbody v-if="this.curr_data && this.convert_data">
        <tr v-for="data in this.pairs_data" :key="data.id">
          <td>{{ this.curr_data[data.currency_from_id]?.currencies_name }} / {{ this.curr_data[data.currency_to_id]?.currencies_name }}</td>
          <td>{{ data.rate }}</td>
          <td>{{ this.convert_data[0].count }}</td>
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
