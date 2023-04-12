<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['Id']) && isset($_POST['Nombre']) && isset($_POST['Descripción']) && isset($_POST['Fecha']) && isset($_POST['Hora']) && isset($_POST['Ubicación']) && isset($_POST['Notas'])) {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripción'];
        $fecha = $_POST['Fecha'];
        $hora = $_POST['Hora'];
        $ubicacion = $_POST['Ubicación'];
        $notas = $_POST['Notas'];

        try {
            $sql = $conn->prepare("UPDATE Eventos SET Nombre=?, Descripción=?, Fecha=?, Hora=?, Ubicación=?, Notas=? WHERE id=?");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $descripcion);
            $sql->bindParam(3, $fecha);
            $sql->bindParam(4, $hora);
            $sql->bindParam(5, $ubicacion);
            $sql->bindParam(6, $notas);
            $sql->bindParam(7, $id);
            if ($sql->execute()) {
                echo "<script>alert('Se ha actualizado el Evento de $nombre'); window.location.replace('../eventos.php');</script>";
            } else {
                echo "Error updating record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
?>