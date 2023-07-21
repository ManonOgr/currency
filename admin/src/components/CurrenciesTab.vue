<script>
import axios from "axios";

const URL = "http://localhost:8000/api/currencies";

export default {
  name: "CurrenciesTab",
  data() {
    return {
      api_data: "",
    };
  },
  mounted() {
    axios.get(URL).then((response) => {
      this.api_data = response.data;
      console.log(this.api_data);
    });
  },
};

</script>




<template>
  <div class="container-tab">
    <h1>Devises</h1>
    <v-table height="300px">
      <thead>
        <tr>
          <th>nom</th>
          <th>code</th>
          <th>symbol</th>
          <th>modifier</th>
          <th>supprimer</th>

        </tr>
      </thead>
      <tbody>
        <tr v-for="data in this.api_data" :key="data.id">
          <td>{{ data.currencies_name }}</td>
          <td>{{ data.currencies_code }}</td>
          <td>{{ data.currencies_symbol }}</td>
          <td><v-btn variant="tonal"> Modifier </v-btn></td>
        <td>
          <v-btn variant="tonal">
            Supprimer
          </v-btn>
        </td>
        </tr>
      </tbody>
    </v-table>

    <v-btn variant="tonal">
          Ajouter
          </v-btn>
  </div>
</template>

<style>
.container-tab {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}

table {
  border-collapse: collapse;
}

th,
td {
  border: 1px solid black;
}

button {
  margin-top: 30px;
}
</style>
