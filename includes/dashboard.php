<?php
require_once 'conexao-bd.php';

$query = $conn->query("SELECT * FROM clientes");
$numClientes = $query->rowCount();

$query = $conn->query("SELECT * FROM pacientes");
$numPacientes = $query->rowCount();

$query = $conn->query("SELECT * FROM agendamentos");
$numAgendamentos = $query->rowCount();

$query = $conn->query("SELECT * FROM usuarios");
$numUsuarios = $query->rowCount();
