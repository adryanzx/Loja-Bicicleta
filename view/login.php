<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login/login.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header-bg">
    <div class="header container">
      <a href="./">
        <img  src="../img/icones/bike.svg" width="76" height="12" alt="">
      </a>      
    </div>
  </header>
    

    <section class="conteudo-login">
        <section class="conteudo-formulario">
            <form id="form-log" method="POST" action="../processamento/processamento.php">
                <label id="input-log">Entre</label>
                <input id="input-log" type="text" placeholder="Email" name="inputEmailLog">
                <input id="input-log" type="password" placeholder="Senha" name="inputSenhaLog">
                <input id="botao-log" type="submit" value="ENTRE">
            </form>
            
        </section>
    </section>
    </section>
    <footer class="footer-bg">
    <div class="footer container">
      <img src="../img/icones/bike.svg" width="76" height="12" alt="">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+551899999999">+55 18 9999-9999</a></li>
          <li><a href="mailto:contato@.com">contato@.com</a></li>
          <li>Rua adryanjoao, 999 - sumidos</li>
          <li>São Paulo - SP</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="../img/redes/instagram.svg" alt="Instagram">
          </a>
          <a href="./">
            <img src="../img/redes/facebook.svg" alt="Facebook">
          </a>
          <a href="./">
            <img src="../img/redes/youtube.svg" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./bicicletas.html">Bicicletas</a></li>
            <li><a href="./seguros.html">Seguros</a></li>
            <li><a href="./contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Adryan & Joao © Alguns direitos reservados.</p>
    </div>
  </footer>
    
</body>
</html>