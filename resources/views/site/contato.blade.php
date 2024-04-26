<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .error-message {
      color: red;
      font-size: 0.9em;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/inicial">
      <img src="logo-etec.png" alt="Descrição da Imagem" style="width: 50px; height: 50px; vertical-align: middle; margin-right: 10px;"> Início
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sobrenos">Sobre Nós</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="form-container">
        <h2 class="text-center mb-4">Entre em Contato</h2>
        <form id="contactForm">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
            <div class="error-message" id="errorNome"></div>
          </div>
          <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone">
            <div class="error-message" id="errorTelefone"></div>
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email">
            <div class="error-message" id="errorEmail"></div>
          </div>
          <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
            <div class="error-message" id="errorMensagem"></div>
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-3">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

  function validateForm() {
    let isValid = true;

  
    $('.error-message').text('');

    if ($('#nome').val().trim() === '') {
      $('#errorNome').text('Por favor, digite seu nome.');
      isValid = false;
    }

  
    const telefoneRegex = /^\d{10,}$/;
    if (!telefoneRegex.test($('#telefone').val().trim())) {
      $('#errorTelefone').text('Por favor, digite um telefone válido (apenas números).');
      isValid = false;
    }


    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test($('#email').val().trim())) {
      $('#errorEmail').text('Por favor, digite um e-mail válido.');
      isValid = false;
    }

   
    if ($('#mensagem').val().trim() === '') {
      $('#errorMensagem').text('Por favor, digite sua mensagem.');
      isValid = false;
    }

    return isValid;
  }


  $('#contactForm').submit(function(event) {

    event.preventDefault();

  
    if (validateForm()) {
    
      alert('Formulário válido. Enviando...');

    } else {
      alert('Por favor, corrija os erros no formulário antes de enviar.');
    }
  });
</script>

</body>
</html>
