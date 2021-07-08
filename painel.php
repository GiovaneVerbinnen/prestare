<?php
include('conectaBanco.php');
require('cabecalho.php');
?>
<section class="section has-background-white-bis">
  <div class="container ">
    <div class="columns  has-text-centered">
      <div class="column">
        <h1 class="is-size-1 my-4" style="font-family: 'Engagement', cursive;">
          Bem vindo!
        </h1>

        <?php
        require('consultaItem.php');
        ?>
        <!-- <img src="./assets/Analytics.png" alt="img" style="width: 400px;"> -->
        <a class="button is-success is-medium has-text-weight-bold mt-4" href="formCadItem.php">CADASTRAR NOVO ITEM</a>
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