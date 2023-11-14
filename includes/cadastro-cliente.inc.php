<?php
if (isset($_POST["submit"])){
require_once __DIR__ .'/../conexao-bd.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$stmt = $conn->prepare('INSERT INTO clientes(nome, email, senha, cpf, telefone) VALUES(?, ?, ?, ?, ?)'); 

$stmt->execute( array($nome, $email, $senha, $cpf, $telefone) );

if ($stmt){
    $query = $conn->prepare("SELECT * FROM clientes WHERE cpf = ? limit 1");

    $query->execute( array($cpf) );

    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($resultado) {
        $id = $resultado[0]["idCliente"];

        header("Location: ../cadastro-paciente.php?id=". $id);
        exit();
    }
}

} else {
    echo 'Erro ao cadastrar paciente';
};