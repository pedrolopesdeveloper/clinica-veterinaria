
<?php

    require_once '../conexao-bd.php';

    $id = (int)$_GET['id']; 

    $stmt = $conn->prepare('DELETE FROM clientes WHERE idCliente = ?');

    $stmt->bindParam(1, $id);

    $stmt->execute();

    
    header("Location: ../crud-cliente.php");
    exit();
