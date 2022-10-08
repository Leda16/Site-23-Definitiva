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
  <div id="preloader">
<link rel="stylesheet" href="style.css">
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="ring"></div>
                <p>Carregando<span class="auto-type"></span></p>

                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

                <script>
                    var typed = new Typed('.auto-type', {
                    strings: [".", "..", "..."],
                    typeSpeed: 30,
                    backSpeed: 150,
                    loop: true
                    })
                </script>
                <div style="display: none;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <script>

var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
    loader.style.display = "none";
})

</script>
            </div>
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