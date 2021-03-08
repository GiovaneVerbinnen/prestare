<?php
include('conectaBanco.php');
require('cabecalho.php');
?>
<section class="section">
    <div class="container">
      <div class="columns  has-text-centered">
        <div class="column">
        <h1 class="title">
            Bem vindo!
          </h1> 
          <p class="subtitle">
            Confira seus objetos hoje!
          </p>
          <img src="./assets/Analytics.png" alt="img" style="width: 400px;">
          <a class="button is-info is-medium has-text-weight-bold" href="formCadItem.php">CADASTRAR NOVO ITEM</a>
        </div>
        <div class="column">
        <?php
        require('consultaItem.php');
        ?>
        </div>
      </div>
    </div>
    </section>
</div>
</div>
</div>
</div>

<?php

 require('rodape.php');

?>

