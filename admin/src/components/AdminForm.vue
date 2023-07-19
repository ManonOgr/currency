<script>
</script>

<template>
  <section>
    
      <form class="form-horizontal" method="post">

        <h3 class="title">Login</h3>
        <div class="form-group">
          <input name="email" type="email" class="form-control" placeholder="E-mail" />
        </div>
        <div class="form-group">

          <input name="password" type="password" class="form-control" placeholder="Password"/>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>

  </section>
</template>

<style scoped>

section{
  display: flex;
  align-items: center;
  justify-content: center;
}

form{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  width: 0%;
  background-color: aqua;
}

.form-group{
  margin-top: 20px;
}

button{
  margin-bottom: 30px;
  margin-top: 20px;
}

</style>