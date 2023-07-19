<template>
    <div class="container-tab">
        <h1>Devises </h1>
        <table>
            <thead>
                <tr>
                    <th>nom</th>
                    <th>code</th>
                    <th>symbole</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row">
                    <td>donnée dure</td>
                    <td>donnée dure</td>
                    <td>donnée dure</td>
                </tr>
            </tbody>
        </table>

        <button class="btn"> Ajouter une paire </button>

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

th, td {
  border: 1px solid black;
}

button {
    margin-top: 30px;
}
</style>