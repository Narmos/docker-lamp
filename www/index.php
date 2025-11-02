<!DOCTYPE html>
<html class="theme-dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAMP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <style>
      .blink {animation: blink 5s linear infinite;}
      @keyframes blink {0%{opacity: 1;}50%{opacity: 0.2;}100%{opacity: 1;}}
    </style>
  </head>
  <body class="has-navbar-fixed-bottom">

  <nav class="navbar is-fixed-bottom is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary has-text-primary-dark" href="https://github.com/Narmos/docker-lamp" target="_blank">
            <strong>GitHub</strong>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <section class="section is-large">
    <div class="container">
      <h1 class="title">LAMP</h1>
      <p class="subtitle pl-2"><span class="blink has-text-primary">⤷</span>environnement de <strong>développement</strong> local</p>
      <div class="columns">
        <div class="column">
          <div class="content">
            <h2 class="title">Environnement</h2>
            <div class="block control">
              <div class="tags has-addons">
                <span class="tag is-dark">Apache</span>
                <span class="tag is-primary"><?= apache_get_version(); ?></span>
              </div>
            </div>
            <div class="block control">
              <div class="tags has-addons">
                <span class="tag is-dark">MariaDB</span>
                <span class="tag is-primary">
                  <?php
                    $link = mysqli_connect("database", "root", "rootpwd", null);
                    if (mysqli_connect_errno()) {
                      printf("Connexion échouée : %s", mysqli_connect_error());
                    } else {
                      printf(mysqli_get_server_info($link));
                    }
                    mysqli_close($link);
                    ?>
                </span>
              </div>
            </div>
            <div class="block control">
              <div class="tags has-addons">
                <span class="tag is-dark">PHP</span>
                <span class="tag is-primary"><?= phpversion(); ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="content">
            <h2 class="title">Accès rapide</h2>
            <ul>
              <li><a class="has-text-primary" href="/phpinfo.php">phpinfo()</a></li>
              <li><a class="has-text-primary" href="http://localhost:8080">phpMyAdmin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  </body>
</html>