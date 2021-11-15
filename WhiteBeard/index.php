<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WhiteBeard</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>

  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->

      <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h4 class="text-white">Collapsed content</h4>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
     <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark">-->
      <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="index.php">
           WhiteBeard
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <form name="login" method="post" action="verifica-login.php">
                <label class="form-label"><font color="#FFF">Login:</label>
                <input type="text" name="txtlogin">
                <label class="form-label">Senha:</label></font>
                <input type="password" name="txtsenha">
                <input type="submit" value="Entrar">
              </form>
            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">A agência</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/fundo.jpg" class="d-block w-100" alt="Projetos de e-commerce">

            <!-- tirar classe d-none -->

            <div class="carousel-caption d-md-block">
              <h2>Uma equipe de cabelereiros de qualidade!</h5>
              <p>Venha cortar com a gente.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/fundo2.jpg" class="d-block w-100" alt="Engenharia de software">
            <div class="carousel-caption d-md-block">
              <h2>Diversos cortes em nosso catálogo.</h5>
              <p>Deixe sua beleza falar mais alto.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/fundo3.jpg" class="d-block w-100" alt="Manutenção em software">
            <div class="carousel-caption d-md-block">
              <h2><b>WhiteBeard</b> a barbearia para MACHOS.</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Conheça a WhiteBeard</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/salao.jpg" alt="Salão">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Uma equipe de profissionais muito especializada</h3>
                <p>Nossos cortes são adaptados ao cliente e seu propósito.</p>
                <p>Venha cortar o seu cabelo conosco!</p>
                <p>Esses espaços são uma versão aperfeiçoada e sofisticada das barbearias vintage de antigamente.</p>
                <p>E se você mora em São Paulo, sorte sua, porque essa é a capital das barbearias mais incríveis do país.</p>

                </div>
            </div>
          </div>
      </div>
      <!-- Serviços da empresa -->
      <div id="services-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h3 class="main-title">Nossas especialidades</h3>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-mobile-alt"></i>
              <h4>Cortes masculino</h4>
              <p>Buscamos adpatar novos estilos de cortes para que nossos clientes se sintam conforavéis</p>
            </div>
            <div class="col-md-4 service-box">
            <i class="fas fa-paint-brush"></i>
              <h4>Pigmentação capilar</h4>
              <p>Fazemos seus sonhos de cabelos se tornarem realidade</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-shopping-cart"></i>
              <h4>Venda de produtos</h4>
              <p>Temos diversos produtos para a manutenção e cuidados de cabelos masculinos.</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Newsletter -->
      <div id="news-area">
        <div class="container">
          <div class="col-md-12">
            <h3 class="main-title">Fique por dentro das novidades</h3>
          </div>
          <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre as novas tendencias na moda capilar</p>
          <form action="">
            <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
            <input type="submit" id="news-btn" value="Inscrever">
          </form>
        </div>
      </div>

  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (11)99999-9999</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 22:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@whitebeard.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha cortar seu cabelo com uma das nossas filiais</span> </p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido por SofOne &copy; 2021</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>