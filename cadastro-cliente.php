<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar-se | Petshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container">
        <!--Cabeçalho-->
        <nav class="navbar navbar-expand-lg p-4">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo-white.svg" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <div class="nav-item">
                    <a class="nav-link active" href="dashboard.html"></a>
                </div>
            </div>
            </div>
        </nav><!--Cabeçalho-->

    <div class="d-flex justify-content-center row">
        <div class="mb-4 mt-2 col-12 d-flex justify-content-center row">
            <div class="col-md-6">      
                <p>Olá!<br>
                Cadastre um novo cliente para agendar uma consulta &#129303;</p>
            </div>
        </div>
        <div class="col-6">
    <form class="row g-3" action="includes/cadastro-cliente.inc.php" method="post">
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input type="text" class="form-control" id="inputEmail4" name="nome" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Email</label>
          <input type="text" class="form-control" id="inputAddress" name="email" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Senha</label>
          <input type="password" class="form-control" id="inputAddress2" name="senha" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">CPF</label>
          <input type="text" class="form-control" id="inputCity" name="cpf" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputCity" name="telefone" required>
        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">
                Cadastrar
              </button>
        </div>
      </form>
    </div>
    </div>
</div>


            <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="modalCliente" tabindex="-1" aria-labelledby="modalCliente" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalCliente">Olá Usuário123</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Agora que você já se cadastrou, vamos cadastrar o seu pet para que ele possa se consultar conosco 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="cadastro-paciente.html"><button type="button" class="btn btn-primary">Prosseguir</button></a>
        </div>
      </div>
    </div>
  </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>