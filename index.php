

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cadastro & Login</title>
  <meta name="description" content="Orçamento.">

  <link rel="stylesheet" href="./css/style.css">
</head>

<body id="orcamento">
  

        
      <div class="orcamento-dados form">
        <h2 class=" cor-9 col-2" style="font-size: 50px;">Cadastro</h2>
          <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
          </div>
          <div>
            <label for="sobrenome">Email</label>
            <input type="text" id="email" name="email" >
          </div>
          <div class="col-2">
            <label for="cpf">CPF</label>
            <input type="number" id="cpf" name="cpf" placeholder="000.000.000-00">
          </div>
          <div class="col-2">
            <label for="email">	Senha </label>
            <input type="email" id="senha" name="senha" placeholder="*******">
          </div>
		  <button class="botao col-2">Faça o cadastro</button>

        <h2 class="cor-9 col-2" style="font-size: 50px;">Login</h2>
          <div>
            <label for="cep">Email</label>
            <input type="text" id="email" name="email">
          </div>
          <div>
            <label for="numero">Senha</label>
            <input type="text" id="senha" name="senha" placeholder="*******">
          </div>
          
          <button class="botao col-2">Faça o Login </button>
      </div>
    </form>
  </main>

  
 <script src="./js/script.js"></script>
</body>

</html>


