<script>
import axios from "axios";


export default {
    props :{
    id: Number,
    rate: Number
   },
  methods: {
    async editPairs(id) {
        await axios
        .put(`http://127.0.0.1:8000/api/pairs/${id}`,document.getElementById("input").value )
    },
  },
};
</script>

<template>
  <form>
    <div class="row col-lg-12">
      <h1>Modifiez le taux de change de la paire</h1>
      <div class="mb-3 col-lg-3">
        <label for="rate">Taux de change</label>
        <v-text-field id="input" placeholder="0"></v-text-field>
      </div>
      <div class="col-lg-3 m-auto">
        <button
          type="submit"
          class="btn btn-primary"
          @click.prevent="editPairs(id)"
        >
          Modifier
        </button>
      </div>
    </div>
  </form>
</template>

