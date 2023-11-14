
<?php

    require_once '../conexao-bd.php';

    $id = (int)$_GET['id']; 

    $stmt = $conn->prepare('DELETE FROM pacientes WHERE idPaciente = ?');

    $stmt->bindParam(1, $id);

    $stmt->execute();

    
    header("Location: ../crud-paciente.php");
    exit();
