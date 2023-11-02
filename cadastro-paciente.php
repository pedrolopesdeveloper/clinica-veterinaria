<?php
$id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar seu Pet | Petshophop</title>
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


  

        <!--Cadastro do Pet-->
        <div class="d-flex justify-content-center row">
                <div class="mb-4 col-12 d-flex justify-content-center row">
                    <div class="col-md-6">    
                        <p>
                        Agora vamos cadastrar o pet para que ele possa realizar consultas com nossos veterinários &#129303;</p>
                    </div>
                </div>
    
            <div class="col-md-6">
                <form class="row g-3 border rounded-1 p-2" action="includes/cadastro-paciente.inc.php" method="post">
                    <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nome" required>
                    </div>
                    <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Raça</label>
                    <input type="text" class="form-control" id="inputPassword4" name="raca" required>
                    </div>
                    <div class="col-12">
                    <label for="inputAddress" class="form-label">Idade</label>
                    <input type="date" class="form-control" id="inputAddress" name="idade" required>
                    </div>
                    <div class="col-12">
                        <label for="saude" class="form-label">Histórico de saúde</label>
                        <textarea class="form-control" aria-label="With textarea" id="saude" required placeholder="Breve descrição do histórico de saúde do seu pet" name="historico"></textarea> 
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary" >Cadastrar</button>
                    </div>
                </form>
            </div>
        </div><!--Cadastro do Pet-->

        
        <!-- Modal -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal" tabindex="-1" id="modalPaciente">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Spike é um ótimo nome para seu filhote</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Agora que você cadastrou o seu pet, vamos agendar uma consulta!</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <a href="agendamento.html"><button type="button" class="btn btn-primary">Prosseguir</button></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>