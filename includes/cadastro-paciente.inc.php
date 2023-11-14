<?php
if (isset($_POST["submit"])){
require_once '../conexao-bd.php';

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$historico = $_POST['historico'];
$id = (int)$_POST['id'];

$stmt = $conn->prepare('INSERT INTO pacientes(fkIdCliente, nome, raca, idade, historico) VALUES(?, ?, ?, ?, ?)'); 

$stmt->execute( array($id, $nome, $raca, $idade, $historico) );

header("Location: ../agendamento.php?id=".$id );
exit();

} else {
    echo 'sei lá';
};