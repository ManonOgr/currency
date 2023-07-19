<template>
  <div>
    <!-- Message erreur en cas d'échec de requête -->
    <div class="alert alert-danger mt-4">Error, please try again.</div>
        <div class="container" >
          <h2>Currency converter</h2>

          <!-- Formulaire de conversion -->
          <form>
            <div class="containerForm" >
              <!-- Sélection de la devise source -->
              <div class="form-group">
                <label for="pairFrom">Currency From : </label>
                <select id="pairFrom" class="form-control" required>
                  <option></option>
                </select>
              </div>

              <!-- Sélection de la devise cible -->
              <div class="form-group mt-4">
                <label for="pairTo">Currency To : </label>
                <select id="pairTo" class="form-control" required>
                  <option></option>
                </select>
              </div>
            </div>

              <!-- Saisie du montant à convertir -->
              <div class="form-group mt-4">
                <label for="amount">Amount to convert : </label>
                <input
                  id="amount"
                  class="form-control"
                  type="number"
                  min="0.000000"
                  max="999999"
                  pattern="^[0-9]+(\.[0-9]{1,6})?$"
                  step="0.000001"
                  required
                />
              </div>
           

            <!-- Bouton de conversion -->
            <button class="btn">Convert</button>
          </form>

          <!-- Affichage du résultat de conversion -->
          <div class="text-center">Conversion result :</div>
        </div>
  
  </div>
</template>

<style>
form{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
.containerForm{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 400px;
    margin-bottom: 30px;
}
</style>
