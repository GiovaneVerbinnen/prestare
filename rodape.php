      <footer class="footer has-background-grey-lighter p-5 ">
        <div class="content has-text-centered is-dark ">
          <p class="is-size-6">
            <strong>
              Prestare
            </strong>
            por
            <a href="https://www.linkedin.com/in/giovane-v/">
              Giovane Verbinnen de Oliveira
            </a>
          </p>
        </div>
      </footer>
      <script>
        // MENU MOBILE
        document.addEventListener('DOMContentLoaded', () => {

          const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

          if ($navbarBurgers.length > 0) {

            $navbarBurgers.forEach(el => {
              el.addEventListener('click', () => {
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
              });
            });
          }
        });
      </script>
      </body>

      </html>