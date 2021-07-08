
<?php
require_once('verifica_login.php');
echo "<div class='box table-container'>
<table  class='table is-striped is-narrow is-hoverable  is-fullwidth' >";
echo "
  <h1 class='is-size-4 mb-4'>Itens Emprestados</h1>
    <thead class='is-uppercase '>
      <tr>
      <th> ID </th>
      <th> Data de Cadastro </th>
      <th> Item </th>
      <th> Mutuante </th>
      <th> Mutuário </th>
      <th> Data devolução </th>
      <th> Ação</th>
      </tr>
    </thead>
";

// $conexao = mysqli_connect('localhost', 'root', '', 'prestare') or die('Erro no banco de dados');
$conexao = mysqli_connect('localhost', 'root', 'R64S1m/JVu947bye', 'prestare') or die('Não conseguimos conectar no banco de dados!');
$sql = "select * from itens";

$resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');

function data($data)
{
  if ($data == '0000-00-00 00:00:00.000000') {
    $msg = '<p class="has-text-primary ">Aguardando</p>';
    return $msg;
  } else {
    return date("d/m/Y", strtotime($data));
  }
}

while ($registro = mysqli_fetch_array($resultado)) {
  $id = $registro['item_id'];
  $data_cadastro = $registro['data_cadastro'];
  $item = $registro['item'];
  $mutuante = $registro['mutuante'];
  $mutuario = $registro['mutuario'];
  $data_devolucao = $registro['data_devolucao'];

  echo "<tr>";
  echo "<td>" . "$id" . "</td>";
  echo "<td>" . data($data_cadastro) . "</td>";
  echo "<td>" . "$item" . "</td>";
  echo "<td>" . "$mutuante" . "</td>";
  echo "<td>" . "$mutuario" . "</td>";
  echo "<td>" . data($data_devolucao) . "</td>";
  echo "<td>" . "
  <form action='devolucao.php' method='POST'>
  <input  name='data' type='hidden' value='$data_devolucao' />
  <input  name='item' type='hidden' value='$id' />
  <button class='button is-link' type='submit'>Marcar Devolução</button>
  </form>" . "</td>";
  echo "</tr>";
}

mysqli_close($conexao);
echo "</table></div>";

?>
