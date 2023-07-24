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
    });
  },
};

</script>

<template>
  <div class="title">
    <h1>Devices</h1>
    <div class="container-tab">
      <v-table height="300px">
      <thead>
        <tr>
          <th>nom</th>
          <th>code</th>
          <th>symbol</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="data in this.api_data" :key="data.id">
          <td>{{ data.currencies_name }}</td>
          <td>{{ data.currencies_code }}</td>
          <td>{{ data.currencies_symbol }}</td>
        </tr>
      </tbody>
    </v-table>
    </div>

  </div>
</template>

<style>
.title {
  display: flex;
  align-items: center;
  flex-direction: column;
  margin-top: 50px;
}

.container-tab{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 50px;
}
</style>
