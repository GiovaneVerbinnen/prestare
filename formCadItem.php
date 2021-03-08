<?php
require('cabecalho.php');
?>

<section class="section">
  <div class="container">
    <h1 class="title">
      Bem vindo!
    </h1> 
    <p class="subtitle">
      Cadastre seus itens aqui!
    </p>
    <div class="columns">
    <div class="column">
    <img src="assets/form.png" alt="img" style="max-width: 400px;">
    </div>
      <div class="column">
        <form action="cadastraItem.php"  method="POST">
        <input class="input" type="hidden" name="id">
            <div class="field">
              <label class="label">Nome do Item</label>
              <div class="control">
                <input required class="input" type="text" placeholder="Nome" name="item">
              </div>
            </div>
            <div class="field">
              <label class="label">Mutuário</label>
              <div class="control">
              <input required class="input" type="text" placeholder="Mutuário" name="mutuario">
              </div>
            </div>
           <div class="field is-grouped">
            <div class="control">
              <button class="button is-link" type="submit" >Cadastrar</button>
            </div>
            <div class="control">
              <a class="button is-warning" href="painel.php">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
</section>

<?php
  require('rodape.php');

?>

