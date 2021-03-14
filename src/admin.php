<?php
require('cabecalho.php');
if ($_SESSION['usuario'] != 'admin') {
  header('Location: restrito.php');
  exit();
}
?>

<!-- INICIO - Painel Simplificado -->
<section class="hero is-dark ">
  <div class="hero-body ">
    <div class="container ">
      <nav class="level ">
        <div class="level-item has-text-centered ">
          <div>
            <p class="heading">Usuários</p>
            <p class="title">
              <?php
              require('conectaBanco.php');
              $sql = "select * from pessoas";
              $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');
              echo mysqli_num_rows($resultado);
              mysqli_close($conexao);
              ?>
            </p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Objetos Cadastrados</p>
            <p class="title">
              <?php
              require('conectaBanco.php');
              $sql = "select * from itens";
              $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');
              echo mysqli_num_rows($resultado);
              mysqli_close($conexao);
              ?>
            </p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Pendentes</p>
            <p class="title">
              <?php
              require('conectaBanco.php');
              $sql = "SELECT * from itens where data_devolucao = '0000-00-00 00:00:00.000000'";
              $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');
              echo mysqli_num_rows($resultado);

              mysqli_close($conexao);
              ?>
            </p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Devolvidos</p>
            <p class="title">
              <?php
              require('conectaBanco.php');
              $sql = "select * from itens where data_devolucao <> '0000-00-00 00:00:00.000000'";
              $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');
              echo mysqli_num_rows($resultado);
              mysqli_close($conexao);
              ?>
            </p>
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>
<!-- FIM - Painel Simplificado -->

<!-- INICIO - Relatório Usuários -->
<section class="section">
  <div class="container">
    <h1 class="title">
      Usuários
    </h1>
    <?php
    require('consultaPessoa.php');
    ?>
  </div>
</section>
<!-- FIM - Relatório Usuários -->

<?php
require('rodape.php');
?>