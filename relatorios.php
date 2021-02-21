<?php

// include('consultaPessoa.php');

require('cabecalho.php');

echo "<h1 class='is-size-3'>Consulta</h1>";
echo "<div class='section'>";
  echo "<div class='columnn '>";
    require('consultaPessoa.php');
  echo "</div class='columnn'>";
echo "</div class='section'>";


require('rodape.php');

?>