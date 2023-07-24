<script>
import axios from "axios";
const URL = "http://localhost:8000/api/pairs";
const URLCurrencies = "http://localhost:8000/api/currencies";
const URLConversions = "http://localhost:8000/api/conversions";

export default {
  methods: {
    async deletePairs(id) {
      await axios
        .delete(`http://127.0.0.1:8000/api/pairs/${id}`)
      this.pairs_data = this.pairs_data.filter((p) => p.id !== id);
    },
    onHandleUpdate(id) {
      this.$router.push({ name: "edit", params: { id: id } });
    },
  },
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
    });

    await axios.get(URLCurrencies).then((response) => {
      this.curr_data = response.data;
    });
    await axios.get(URLConversions).then((response) => {
      this.convert_data = response.data;
    });
  },
};
</script>

<template>
  <div class="container-tab-admin">
    <div class="title">
      <h1>Dashboard Admin</h1>
    </div>
    <div class="tab">
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
            <td>
              <v-btn variant="tonal" @click="onHandleUpdate(data.id)">
                Modifier
              </v-btn>
            </td>
            <td>
              <v-btn variant="tonal" @click="deletePairs(data.id)">
                Supprimer
              </v-btn>
            </td>
          </tr>
        </tbody>
      </v-table>
    </div>
  </div>
</template>

<style>
.container-tab-admin {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 50px;
}

.tab {
  margin-top: 50px;
}
</style>
