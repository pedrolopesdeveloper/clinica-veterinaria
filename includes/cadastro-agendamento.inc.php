<?php
if (isset($_POST["submit"])){
require_once __DIR__ .'/../conexao-bd.php';

$data = $_POST['data'];
$descricao = $_POST['descricao'];
$id = (int)$_POST['id'];


$stmt = $conn->prepare('INSERT INTO agendamentos(dataConsulta, fkIdPaciente, status, descricao) VALUES(?, ?, ?, ?)'); 

$stmt->execute( array($data, $id, '1', $descricao) );


        header("Location: ../index.php");
        exit();


} else {
    echo 'Erro ao cadastrar paciente';
};