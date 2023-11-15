<?php
require_once 'includes/dashboard.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro a Consulta | Petshop</title>
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

    <section id="inicio">
        <img src="img/clinic-img.svg" alt="" width="580" height="580">

        <div>
            <h1>Bem - Vindo(a) </h1>
            <p class="paragrafo">
                
            </p>
             <button type="button" class="btn btn-primary botao" data-bs-toggle="modal" data-bs-target="#modalAgendamento">Agenda uma  consulta</button>
            
        </div>

        <img class="absolute" src="img/shape.svg" alt="">
    </section>

    <!--Dashboard Resumo do dia-->
    <section class="homeblock-stats py-5" id="stats">
        <div class="container py-md-5 py-4 HomePageStats">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <h1 class="title-style mb-2">Nossas atividades e experiência</h1>
                        <div class="title-paw-style">
                            <i class="fas fa-paw"></i>
                            <i class="fas fa-paw paw-2"></i>
                            <i class="fas fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A perspiciatis, amet non reprehenderit hic animi asperiores eius tempora! Similique quibusdam itaque molestias quos vel fugiat voluptatum mollitia cumque facilis dolorem.
                    </p>
                    <div class="row mt-4 pt-2">
                        
                        <!--Estatisticas Clientes-->
                        <a href="crud-cliente.php" class="col-6 border cards">
                        <div >
                            <div class="counter color-bg-1">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number" data-to="630" data-speed="1500"><?php echo $numClientes?></div>
                                    
                                </div>
                                <p class="count-text">Clientes</p>
                            </div>
                        </div>
                        </a>

                        <!--Estatisticas Consultas-->
                        <a href="crud-agendamento.php" class="col-6 border cards">
                        <div >
                            <div class="counter color-bg-2">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number" data-to="80" data-speed="1500"><?php echo $numAgendamentos?></div>
                                    
                                </div>
                                <p class="count-text">Consultas</p>
                            </div>
                        </div>
                    </a>

                        <!--Estatisticas Pacientes-->
                        <a href="crud-agendamento.php" class="col-6 mt-4 border cards"  >
                        <div >
                            <div class="counter color-bg-3">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number" data-to="820" data-speed="1500"><?php echo $numPacientes?></div>
                                  
                                </div>
                                <p class="count-text">Total de Pacientes</p>
                            </div>
                        </div>
                        </a>

                        <!--Estatisticas Usuarios do sistema-->
                        <div class="col-6 mt-4 border cards">
                            <div class="counter color-bg-4">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number" data-to="90" data-speed="1500"><?php echo $numUsuarios?></div>
                                  
                                </div>
                                <p class="count-text">Usuários do sistema</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 ps-xl-0 mt-lg-0 mt-5">
                    
                </div>
            </div>
        </div>
    </section>
    
     
        <!-- Modal -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal" tabindex="-1" id="modalAgendamento">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Agendar nova consulta</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Deseja agendar uma consulta para novo cliente?</p>
                    </div>
                    <div class="modal-footer">
                      <a href="cadastro-cliente.php"><button type="button" class="btn btn-primary">Agendar</button></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>