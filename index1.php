<!-- INPUT DE DADOS DO BANCO DE DADOS -->
<?php
  if(isset($_POST['submit']))
  {
    // print_r('Nome: '.$_POST['upuser']);
    // print_r('Senha: '.$_POST['uppasswd']);

    include_once('server/config.php');

    $upuser = $_POST['upuser'];
    $uppasswd = $_POST['uppasswd'];

    $result = mysqli_query($conexao, "INSERT INTO oficiais(upuser,uppasswd) 
    VALUES ('$upuser','$uppasswd')");

  }

?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/landpage.css" />
    <title>Registros 23 | Entrar & Registrar</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="server/textLogin.php" method="POST" class="sign-in-form">
            <h2 class="title">Entrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="upuser" type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="uppasswd" type="password" placeholder="Senha" />
            </div>
            <input name="login" type="submit" value="Entrar" class="btn solid" />
            <p class="social-text">Tente entrar de outro jeito.</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="index.php" method="POST" class="sign-up-form">
            <h2 class="title">Registrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="upuser" type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="uppasswd" type="password" placeholder="Senha" />
            </div>
            <input name="submit" type="submit" class="btn" value="Registrar" />
            <p class="social-text">Tente se registrar de outro jeito.</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo(a) aqui ?</h3>
            <p>
              Caso tenha assumido um relatorio recentemente clique aqui em registrar <br> &DownArrow;
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrar
            </button>
          </div>
          <img src="extras/img/land-logo.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ja esta registrado(a) ?</h3>
            <p>
              Caso ja seja registrado aqui, clique aqui em baixo para retornar <br> &downarrow;
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="extras/img/land-logo.png" class="image" alt="" />
        </div>
        <p class="copyright"> &copy; Feito por LEDA e FARIAS.</p>
      </div>
    </div>

    <script src="extras/scripts/landpage.js"></script>
  </body>
</html>