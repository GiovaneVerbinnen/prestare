<?php

session_start();

include('verifica_login.php');

?>

  <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
  <h2><a href="logout.php">Sair</a></h2>

<?php

require('cabecalho.php');

require('corpo.php');

// require('rodape.php');

/*


Itens a entregar:

1. Arquivo compactado ZIP (ou outro formato) contendo:

Arquivos do projeto em HTML, PHP e CSS (caso tenha sido usado em arquivo).
Arquivos de imagem utilizados, incluindo JPG, GIF ou outros formatos.
Banco de dados exportado para arquivo.
2. Vídeo com a explicação do projeto:

Faça um vídeo de dois minutos de duração destacando:
nome completo;
data;
explicação rápida do projeto;
demonstração do funcionamento (fornecendo usuário e senha de acesso).

Faça upload do vídeo no YouTube. Atenção! Ele precisa estar configurado como “Não listado”.




A seguir, de forma geral e resumida, veremos as etapas da Atividade Prática (ATP). Ao longo do detalhamento das semanas, você saberá especificamente o que deve ser desenvolvido.

Projeto Coisas Emprestadas

O objetivo é desenvolver um sistema web utilizando HTML, CSS, PHP e MySQL, para fazer o cadastro de usuários e itens emprestados e permitir o login dos usuários cadastrados, sendo pelo menos um deles administrador do sistema, aplicando estilos gráficos que enriqueçam sua visualização (cores, formas, bordas etc.). O projeto deve ser dinâmico, possibilitando a interação com o usuário por formulários e parâmetros.

O sistema será utilizado para informar para quem algo foi emprestado, devendo atender aos seguintes itens:

  Realizar o cadastro dos usuários e dos itens.

  Realizar o login do usuário.

  Permitir ao usuário acessar/configurar seus dados, que ficam salvos.

  Realizar o cadastro do item emprestado, data e contato do destinatário.

  Opcionalmente, pode haver a data de devolução combinada.

  Na tela inicial, mostrar lista dos itens emprestados e permitir clicar em botão para cadastrar um novo empréstimo.

  Após a data combinada, o item deve ficar destacado na lista de empréstimo; se não houver data determinada, deve-se destacar também.

  Quando algo for devolvido, deve ser marcado no sistema, que irá salvar a data.

  Opcionalmente, pode gerar relatórios de itens emprestados pendentes.


Na etapa 1, começaremos a conhecer HTML, sua evolução histórica e suas estruturas para a criação e formatação de páginas web, trabalhando com vínculos, formulários, listas e tabelas, reconhecendo as declarações HTML e aplicando os conceitos de HTML5, identificando e empregando suas respectivas tags. Começaremos a elaborar páginas HTML com as corretas definições e conceitos.

Na etapa 2, integraremos logicamente estruturas HTML e CSS no processo de design da página web. Aplicaremos a acessibilidade à página de texto em HTML5, gerando resultados mais simples, rápidos e organizados dos layouts, podendo identificar e definir estilos CSS.

Na etapa 3, resolveremos problemas estruturados básicos, com estruturas de controle, mediante conceitos e aspectos básicos da linguagem de programação PHP, com os tipos de dado, declaração e atribuição de variáveis e constantes, operadores e funções simples.

Na etapa 4, trabalharemos com problemas estruturados mais complexos com estruturas de seleção e repetição, utilizando comandos de seleção e repetição essenciais no desenvolvimento da lógica, além de conhecer sua sintaxe, devida implementação e características, como também os operadores condicionais. Faremos a criação e utilização de formulários, manipulando os dados e enviando para o PHP e conhecendo seus métodos de comunicação.

Na etapa 5, resolveremos problemas com passagem de parâmetros e retornos de função, procurando empregar diferentes recursos e identificar sistemas web no modelo cliente-servidor, trabalhando com banco de dados e sua conexão com PHP, cookies, sessões e alguns comandos avançados do PHP.

É sempre importante seguir a ordem cronológica de cada etapa, cumprindo todas as atividades previstas, a fim de um encadeamento lógico para o entendimento completo e atingimento do resultado final.

Ressaltamos pontos importantes a ser cumpridos ao longo dessas atividades:

  Programe seu tempo para se dedicar ao máximo a cada etapa.

  Realize cada etapa com calma e compreenda o que está fazendo, não apenas reproduza.

  Não atrase o desenvolvimento de nenhuma etapa, pois elas são semanais e acumularão, refletindo na entrega final desta ATP.

  Não pule nenhuma etapa! Siga a ordem cronológica. Você verá que a construção do conhecimento é cumulativa nesta ATP.

  A cada dúvida, reveja o material das aulas e das etapas anteriores.

 O processo de desenvolvimento desta ATP possibilitará a você obter os seguintes resultados de aprendizagem:

 - Codificar e integrar logicamente estruturas HTML e CSS em processo de design de página web.

 - Resolver problemas estruturados, codificando com estruturas de controle, funções, passagem de parâmetro e retornos, por meio de linguagem de programação web PHP.

Um bom trabalho e saiba que, com isso, você estará capacitado a iniciar sua jornada no mundo do desenvolvimento de sistemas web utilizando HTML, CSS, PHP e MySQL.
*/

?>

