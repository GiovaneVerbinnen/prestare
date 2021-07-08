<?php
require('cabecalho.php');
?>

<section class="section p-4">
  <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
      <li><a href="#">Prestare</a></li>
      <li><a href="#">Usuário</a></li>
      <li class="is-active"><a href="#" aria-current="page">Alterar Dados</a></li>
    </ul>
  </nav>
  <div class="container">
    <h3 class="tabs is-active has-text-dark has-text-weight-medium">
      Altere seus dados aqui!
    </h3>

    <div class="columns">
      <div class="column ">
        <img src="assets/profile.png" alt="img" style="max-width: 400px;">
      </div>
      <div class="column ">
        <form action="updatePessoas.php" method="POST" class="box p-6 mr-6">
          <div class="field">
            <label class="label">ID</label>
            <div class="control">
              <input class="input is-narrow" type="text" name="id" readonly value="<?php
                                                                                    require('conectaBanco.php');
                                                                                    $login = $_SESSION['usuario'];
                                                                                    $sql = "SELECT userID FROM pessoas WHERE userLogin ='$login'";
                                                                                    $resultado = mysqli_query($conexao, $sql) or die("Não foi possível realizar consulta");
                                                                                    $obj = mysqli_fetch_object($resultado);
                                                                                    echo $obj->userID;
                                                                                    mysqli_close($conexao);
                                                                                    ?>">
            </div>
          </div>
          <div class="field">
            <label class="label">Nome</label>
            <div class="control">
              <input class="input" type="text" placeholder="Nome" name="name" value="<?php
                                                                                      require('conectaBanco.php');
                                                                                      $name = $_SESSION['usuario'];
                                                                                      $sql = "SELECT userName FROM pessoas WHERE userLogin ='$name'";
                                                                                      $resultado = mysqli_query($conexao, $sql) or die("Não foi possível realizar consulta");
                                                                                      $obj = mysqli_fetch_object($resultado);
                                                                                      echo $obj->userName;
                                                                                      mysqli_close($conexao);
                                                                                      ?>">
            </div>
          </div>
          <div class="field">
            <label class="label">Login</label>
            <div class="control">
              <input class="input" type="text" placeholder="Login" name="login" value="<?php
                                                                                        require('conectaBanco.php');
                                                                                        $login = $_SESSION['usuario'];
                                                                                        $sql = "SELECT userLogin FROM pessoas WHERE userLogin ='$login'";
                                                                                        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível realizar consulta");
                                                                                        $obj = mysqli_fetch_object($resultado);
                                                                                        echo $obj->userLogin;
                                                                                        mysqli_close($conexao);
                                                                                        ?>">
            </div>
          </div>
          <div class="field">
            <label class="label">Senha</label>
            <div class="control">
              <input class="input" type="password" placeholder="Senha" name="password">
              <p class="caption has-text-danger">Por segurança sua antiga senha será substituída</p>
            </div>
          </div>
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link" type="submit">Atualizar</button>
            </div>
            <div class="control">
              <button class="button is-link is-light" href="painel.php">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</section>

<?php
require('rodape.php');

?>