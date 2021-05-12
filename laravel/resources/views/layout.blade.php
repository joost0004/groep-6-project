<!DOCTYPE html>
<html>
    <head>
    <title>Kledingbank Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="https://www.kledingbank-zeeland.nl/">
                <img src="/img/logo.png">
              </a>

              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>

                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link">
                    Navigatie
                  </a>

                  <div class="navbar-dropdown">
                    <a class="navbar-item" href="/">
                      Home
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                      Registratie
                    </a>
                  </div>
                </div>
              </div>
            </div>

    <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
            </div>
          </nav>
        </header>
        <br>
        @yield ('content')
    </body>
</html>
