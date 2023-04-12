<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['Id']) && isset($_POST['Nombre']) && isset($_POST['Email']) && isset($_POST['Teléfono']) && isset($_POST['Dirección']) && isset($_POST['Notas'])) {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $email = $_POST['Email'];
        $telefono = $_POST['Teléfono'];
        $direccion = $_POST['Dirección'];
        $notas = $_POST['Notas'];
       
        try {
            $sql = $conn->prepare("UPDATE Empresas SET Nombre=?, Email=?, Teléfono=?, Dirección=?, Notas=? WHERE id=?");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $email);
            $sql->bindParam(3, $telefono);
            $sql->bindParam(4, $direccion);
            $sql->bindParam(5, $notas);
            $sql->bindParam(6, $id);
        
            if ($sql->execute()) {
                echo "<script>alert('Se ha actualizado la Empresa $nombre'); window.location.replace('../empresas.php');</script>";
            } else {
                echo "Error updating record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
?>