<script>
import axios from "axios";

const URL = "http://localhost:8000/api/pairs";
const URLCurrencies = "http://localhost:8000/api/currencies";
const URLConversions = "http://localhost:8000/api/conversions";

export default {
  name: "AdminDashboard",
  data() {
    return {
      convert_data: "",
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
  <v-table height="300px">
    <thead>
      <tr>
        <th class="text-left">Nom de la paire</th>
        <th class="text-left">Taux de change</th>
        <th class="text-left">Décompte</th>
        <th class="text-left">Modifier</th>
        <th class="text-left">Supprimer</th>
      </tr>
    </thead>
    <tbody v-if="this.curr_data && this.convert_data">
      <tr v-for="data in this.pairs_data" :key="data.id">
        <td>
          {{ this.curr_data[data.currency_from_id]?.currencies_name }} /
          {{ this.curr_data[data.currency_to_id]?.currencies_name }}
        </td>
        <td>{{ data.rate }}</td>
        <td>{{ this.convert_data[0].count }}</td>
        <td><v-btn variant="tonal"> Modifier </v-btn></td>
        <td>
          <v-btnvariant="tonal">
            Supprimer
          </v-btnvariant=>
        </td>
      </tr>
    </tbody>
  </v-table>
</template>


