<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['Id']) && isset($_POST['nombrecompleto']) && isset($_POST['Telefono']) && isset($_POST['Empresa']) && isset($_POST['Cargo']) && isset($_POST['Email']) && isset($_POST['Historial'])) {
        $id = $_POST['Id'];
        $nombre = $_POST['nombrecompleto'];
        $telefono = $_POST['Telefono'];
        $empresa = $_POST['Empresa'];
        $cargo = $_POST['Cargo'];
        $email = $_POST['Email'];
        $historial = $_POST['Historial'];

        try {
            $sql = $conn->prepare("UPDATE Contactos SET nombrecompleto=?, Telefono=?, Empresa=?, Cargo=?, Email=?, Historial=? WHERE id=?");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $telefono);
            $sql->bindParam(3, $empresa);
            $sql->bindParam(4, $cargo);
            $sql->bindParam(5, $email);
            $sql->bindParam(6, $historial);
            $sql->bindParam(7, $id);
            if ($sql->execute()) {
                echo "<script>alert('Se ha actualizado el Contacto de $nombre'); window.location.replace('../contactos.php');</script>";
            } else {
                echo "Error updating record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
?>