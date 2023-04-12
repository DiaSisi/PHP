<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['Id']) && isset($_POST['Nombre']) && isset($_POST['Descripcion']) && isset($_POST['Categoria']) && isset($_POST['Pais']) && isset($_POST['Notas'])) {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $categoria = $_POST['Categoria'];
        $pais = $_POST['Pais'];
        $notas = $_POST['Notas'];
     
        try {
            $sql = $conn->prepare("UPDATE Productos SET Nombre=?, Descripción=?, Categoría=?, País=?, Notas=? WHERE id=?");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $descripcion);
            $sql->bindParam(3, $categoria);
            $sql->bindParam(4, $pais);
            $sql->bindParam(5, $notas);
            $sql->bindParam(6, $id);
          
            if ($sql->execute()) {
                echo "<script>alert('Se ha actualizado el Producto $nombre'); window.location.replace('../productos.php');</script>";
            } else {
                echo "Error updating record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    } else {
        echo "algo pasa";
    }
?>