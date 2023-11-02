<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!--Link bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--link css-->
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

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Raça</th>
              <th scope="col">Idade</th>
              <th scope="col">Histórico</th>
              <th scope="col">Opções</th>
              
            </tr>
          </thead>
          <tbody>
            <tr><?php 
            require_once 'conexao-bd.php';
            $query = $conn->query("SELECT * FROM pacientes");
    while ($resultado = $query->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
        echo '<td>'. $resultado['idPaciente'].'</td>';
        echo '<td>'. $resultado['nome'].'</td>';
        echo '<td>'. $resultado['raca'].'</td>';
        echo '<td>'. $resultado['idade'].'</td>';
        echo '<td>'. $resultado['historico'].'</td>';
        echo '<td> <button type="button" class="btn btn-secondary">Editar</button> <a href="includes/apagar.php?id='.$resultado["idPaciente"].'"> <button type="button" class="btn btn-secondary" name="delete">Apagar</button></a></td>';
        echo '<tr>';
    }
    ?>
            </tr>

          </tbody>
    </table>
   
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>