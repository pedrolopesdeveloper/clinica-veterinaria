<!--
<?php
require_once 'includes/dashboard.php';
?>
-->
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
        <!--Sidebar-->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-around navbar-color">
                <div class="navbar-color p-2">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="img/logo-white.svg" alt="Bootstrap" width="100">
                        </a>
                    </div>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fa-solid fa-house"></i><span class="texto fs-5 ms-3 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="dashboard.html" class="nav-link text-white">
                                <i class="fs-5 fa fa-gauge"></i><span class="texto fs-5 ms-3 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa-solid fa-calendar-days"></i><span class="texto fs-5 ms-3 d-none d-sm-inline">Agendamento</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa-solid fa-paw"></i><span class="texto fs-5 ms-3 d-none d-sm-inline">Pacientes</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-users"></i><span class="texto fs-5 ms-3 d-none d-sm-inline">Clientes</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown justify-content-center align-items-center">
                <button class="btn border dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-arrow-right-from-bracket text-white"></i><span class="fs-5 ms-2 text-white">Logout</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
        <!--Fim da sidebar-->

        <!--Area de Administrador-->
        <div class="container ms-5 d-flex justify-content-center align-items-center">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <h1 class="title-style mb-2">Bem - Vindo ao Portal de Administração</h1>
                    </div>
                    <p class="paragrafo text-justify">
                        Explore a central administrativa da nossa Clínica Veterinária, especializada em proporcionar uma gestão eficaz de agendamentos para garantir atendimento personalizado e pontual aos animais de estimação. <br> Nossa plataforma oferece ferramentas intuitivas para a organização eficiente de horários, assegurando que cada paciente receba a atenção necessária no momento certo. Com um foco exclusivo em agendamentos, buscamos simplificar o processo administrativo, permitindo que você otimize sua agenda e ofereça um serviço de qualidade aos nossos pacientes peludos. 
                    </p>

                    <div>
                        <button type="button" class="btn bg-warning-subtle border border-black botao" data-bs-toggle="modal" data-bs-target="#modalAgendamento">
                            Agenda uma  consulta
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim da area de adminis-->

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