<template>
    <div>

        <!-- Message erreur en cas d'échec de requête -->
        <div class="alert alert-danger mt-4">Error, please try again.</div>
        <div class="container mt-5">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                <div class="col-md-6">
                    <h2>Currency converter</h2>

                    <!-- Formulaire de conversion -->
                    <div class=" form-group mt-4">
                        <!-- Sélection de la devise source -->
                        <div class="form-group">
                            <label for="pairFrom">Currency From :</label>
                            <select id="pairFrom" class="form-control"
                                required>
                                <option></option>
                            </select>
                        </div>

                        <!-- Sélection de la devise cible -->
                        <div class="form-group mt-4">
                            <label for="pairTo">Currency To :</label>
                            <select id="pairTo" class="form-control" required>
                                <option></option>
                            </select>
                        </div>

                        <!-- Saisie du montant à convertir -->
                        <div class="form-group mt-4">
                            <label for="amount">Amount to convert :</label>
                            <input id="amount" class="form-control" type="number"  min="0.000000"
                                max="999999" pattern="^[0-9]+(\.[0-9]{1,6})?$" step="0.000001" required />
                        </div>

                        <!-- Bouton de conversion -->
                        <button class="btn btn-primary mt-4">Convert</button>
                    </div>

                    <!-- Affichage du résultat de conversion -->
                    <div class="text-center mt-4">
                        Conversion result : 
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
