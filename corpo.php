<section class="section">
    <div class="container">
      <div class="columns is-vcentered has-text-centered">
        <div class="column">
        <?php
          echo "<h1 class='is-size-3 has-text-left' >Objetos</h1> <hr>";
            require('consultaPessoa.php');
        ?>
        </div>
        <div class="column">
        <h1 class="title">
            Bem vindo!
          </h1> 
          <p class="subtitle">
            Confira seus objetos hoje!
          </p>
          <img src="./assets/Analytics.png" alt="img"style="max-width: 320px;">
        </div>
      </div>
    </div>
    </section>
<section class="hero is-dark ">
<div class="hero-body ">
<div class="container ">
  <nav class="level">
    <div class="level-item has-text-centered">
      <div>
        <p class="heading">Usuários</p>
        <p class="title">
        <?php 
          $conexao = mysqli_connect('localhost', 'root', '', 'prestare') or die('Erro no banco de dados');;
          $sql = "select * from pessoas";
          $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');
          echo mysqli_num_rows($resultado);
          // $row = $resultado->fetch_assoc();
          // echo htmlentities($row['userName']);
          mysqli_close($conexao);
        ?>
        </p>
      </div>
    </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Objetos Cadastrados</p>
      <p class="title">12</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Pendentes</p>
      <p class="title">45</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Devolvidos</p>
      <p class="title">78</p>
    </div>
  </div>
</nav>
</section>
</div>
</div>
</div>
</div>

<!--<section class="section">
    <div class="container">
 <div class="table-container">
  <table class="table">
   <tr>
    <td>
      <div class="buttons">
        <button class="button is-info">Info</button>
        <button class="button is-success">Success</button>
        <button class="button is-warning">Warning</button>
        <button class="button is-danger">Danger</button>
      </div>
    </td>
   </tr>
   <tr>
    <td>
      <div class="buttons">
        <button class="button is-info">Info</button>
        <button class="button is-success">Success</button>
        <button class="button is-warning">Warning</button>
        <button class="button is-danger">Danger</button>
      </div>
  </td>
   </tr>
  </table>
 </div>  -->

<!-- 
  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
  <thead >
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </thead >
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td><p class="buttons">
      <button class="button is-success">
        <span class="icon is-small">
          <i class="fas fa-check"></i>
        </span>
        <span>Save</span>
      </button>
      <button class="button is-danger is-outlined">
        <span>Delete</span>
        <span class="icon is-small">
          <i class="fas fa-times"></i>
        </span>
      </button>
    </p></td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td><p class="buttons">
      <button class="button is-success">
        <span class="icon is-small">
          <i class="fas fa-check"></i>
        </span>
        <span>Save</span>
      </button>
      <button class="button is-danger is-outlined">
        <span>Delete</span>
        <span class="icon is-small">
          <i class="fas fa-times"></i>
        </span>
      </button>
    </p></td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td><p class="buttons">
      <button class="button is-success">
        <span class="icon is-small">
          <i class="fas fa-check"></i>
        </span>
        <span>Save</span>
      </button>
      <button class="button is-danger is-outlined">
        <span>Delete</span>
        <span class="icon is-small">
          <i class="fas fa-times"></i>
        </span>
      </button>
    </p></td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td><p class="buttons">
      <button class="button is-success">
        <span class="icon is-small">
          <i class="fas fa-check"></i>
        </span>
        <span>Save</span>
      </button>
      <button class="button is-danger is-outlined">
        <span>Delete</span>
        <span class="icon is-small">
          <i class="fas fa-times"></i>
        </span>
      </button>
    </p></td>
  </tr> -->

</table>
</div>
      
</div>
</div>
</section>
