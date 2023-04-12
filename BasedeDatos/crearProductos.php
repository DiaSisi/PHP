<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['Nombre']) && isset($_POST['Descripcion']) && isset($_POST['Categoria']) && isset($_POST['Pais']) && isset($_POST['Notas'])) {
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $categoria = $_POST['Categoria'];
        $pais = $_POST['Pais'];
        $notas = $_POST['Notas'];
  
        try {
            $sql = $conn->prepare("INSERT INTO Productos (Nombre, Descripción, Categoría, País, Notas) VALUES (?, ?, ?, ?, ?)");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $descripcion);
            $sql->bindParam(3, $categoria);
            $sql->bindParam(4, $pais);
            $sql->bindParam(5, $notas);

            if ($sql->execute()) {
                // echo "Record inserted successfully";
            // "<td>" .  " <script>". "</td>"
                echo "<script>alert('Se ha insertado el Producto $nombre'); window.location.replace('../productos.php');</script>";
            } else {
                echo "Error inserting record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    } else {
        echo "error algo está pasando, revisa antes del post";
    }
?>
<!-- <script>
    windows.alert('Si funciona')
    header("../productos.php")
</script> -->