<?php
require('cabecalho.php');
?>
  <section class="section">
    <div class="container">
  <?php
  echo "<table  class='table is-striped is-narrow is-fullwidth is-hoverable is-bordered' >";
  echo"
  <div class='columns'>
  <div class='column is-10'>
  <h1 class='title'>Relatório de Itens Pendentes</h1>
  </div>
    <div class='column is-2'>
     <button class='button is-link is-medium' onclick='window.print()'>Imprimir <i class='far fa-file-pdf fa-md pl-5'></i> </button>
    </div>
      <thead class='has-background-grey-lighter'>
        <tr>
        <th> ID </th>
        <th> Data de Cadastro </th>
        <th> Item </th>
        <th> Mutuante </th>
        <th> Mutuário </th>
        <th> Data devolução </th>
        </tr>
      </thead>";

  $conexao = mysqli_connect('localhost', 'root', '', 'prestare') or die('Erro no banco de dados');

  $sql = "select * from itens where data_devolucao = '0000-00-00 00:00:00.000000'";

  $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');

  function data($data){
    if ($data == '0000-00-00 00:00:00.000000') {
        $msg = '<p class="has-text-danger has-text-weight-medium">Aguardando</p>';
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
    echo "<td>"."$id"."</td>";
    echo "<td>". data($data_cadastro) ."</td>";
    echo "<td>"."$item"."</td>";
    echo "<td>"."$mutuante"."</td>";
    echo "<td>"."$mutuario"."</td>";
    echo "<td>".data($data_devolucao)."</td>";
    echo "</tr>";
  }

  mysqli_close($conexao);
  echo "</table>";

  ?>
    </div>
  </section>