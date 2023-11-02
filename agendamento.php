<?php
$id = $_GET['id'];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendar Consulta | Petshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
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

    <div class="container">
      <div class="col-12 col-s-12">
        <form action="includes/cadastro-agendamento.inc.php" method="post">
        <fieldset>
          <legend>Agenda data de consulta:</legend>
          <div class="row">
            <div class="container col-6 col-s-12">
              <label for="txtData">Data da consulta:</label>
              <input type="date" id="txtData" name="data" required>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao" required></textarea>
              </div>
            </div>
          </div>
        </fieldset>
      
          <input type="hidden" name="id" value="<?php echo $id?>">
          <button type="submit" name="submit" class="btn btn-secondary">Agendar</button>
        </form>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>