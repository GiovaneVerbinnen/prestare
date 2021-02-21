<?php
require('cabecalho.php');

?>

  <section class="section">
    <div class="container">
      <h1 class="title">
        Bem vindo!
      </h1> 
      <p class="subtitle">
        Confira seus objetos hoje!
      </p>

<div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item" aria-label="reply">
            <span class="icon is-small">
              <i class="fas fa-reply" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="retweet">
            <span class="icon is-small">
              <i class="fas fa-retweet" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="like">
            <span class="icon is-small">
              <i class="fas fa-heart" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </nav>
    </div>
  </article>
</div>

<div class="columns">
  <div class="column">
    <form action="conectaBanco.php"  method="POST">
        <div class="field">
          <label class="label">Nome</label>
          <div class="control">
            <input class="input" type="text" placeholder="Nome" name="name">
          </div>
        </div>

        <div class="field">
          <label class="label">Login</label>
          <div class="control">
              <input class="input" type="text" placeholder="Login"  name="login">
          </div>
        </div>


        <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" type="submit" >Enviar</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Cancel</button>
        </div>
      </div>
    </form>

  </div>
</div>
  </section>

<?php
  require('rodape.php');

?>

