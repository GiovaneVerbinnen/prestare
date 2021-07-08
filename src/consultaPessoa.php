<?php
error_reporting(0);
require_once('verifica_login.php');
session_start();
?>
<?php
echo "<table  class='table is-striped is-narrow is-hoverable is-bordered' >";
echo "
<thead>
<tr>
<th> Usuário </th>
<th> Login </th>
<th> Senha </th>
</tr>
</thead>
";
// $conexao = mysqli_connect('localhost', 'root', '', 'prestare') or die('Erro no banco de dados');;
$conexao = mysqli_connect('localhost', 'root', 'R64S1m/JVu947bye', 'prestare') or die('Não conseguimos conectar no banco de dados!');
$sql = "select * from pessoas";

$resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');

while ($registro = mysqli_fetch_array($resultado)) {
  $nome = $registro['userName'];
  $login = $registro['userLogin'];
  $password = $registro['userPassword'];
  echo "<tr>";
  echo "<td>" . "$nome" . "</td>";
  echo "<td>" . "$login" . "</td>";
  echo "<td>" . "$password" . "</td>";
  echo "</tr>";
}

mysqli_close($conexao);
echo "</table>";

?>