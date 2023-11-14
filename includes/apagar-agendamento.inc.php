
<?php

    require_once '../conexao-bd.php';

    $id = (int)$_GET['id']; 

    $stmt = $conn->prepare('DELETE FROM agendamentos WHERE idConsulta = ?');

    $stmt->bindParam(1, $id);

    $stmt->execute();

    
    header("Location: ../crud-agendamento.php");
    exit();
