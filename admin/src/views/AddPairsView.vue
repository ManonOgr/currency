<template>
  <form>
    <div class="row col-lg-12">
      <h1>Ajouter une paire</h1>
      <div class="mb-3 col-lg-3">
        <label for="rate">Nom de la paire</label>
        <v-text-field id="input" placeholder="CAD / AUD "></v-text-field>
      </div>
      <div class="mb-3 col-lg-3">
        <label for="rate">Taux de change</label>
        <v-text-field id="input" placeholder="0"></v-text-field>
      </div>
      <div class="col-lg-3 m-auto">
        <button
          type="submit"
          class="btn btn-primary"
        >
          Ajouter
        </button>
      </div>
    </div>
  </form>
</template>
