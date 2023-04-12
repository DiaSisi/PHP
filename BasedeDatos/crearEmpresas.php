<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['Nombre']) && isset($_POST['Email']) && isset($_POST['Teléfono']) && isset($_POST['Dirección']) && isset($_POST['Notas'])) {
        $nombre = $_POST['Nombre'];
        $email = $_POST['Email'];
        $telefono = $_POST['Teléfono'];
        $direccion= $_POST['Dirección'];
        $notas= $_POST['Notas'];
        
        try {
            $sql = $conn->prepare("INSERT INTO Empresas (Nombre, Email, Teléfono, Dirección, Notas) VALUES (?, ?, ?, ?, ?)");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $email);
            $sql->bindParam(3, $telefono);
            $sql->bindParam(4, $direccion);
            $sql->bindParam(5, $notas);
            if ($sql->execute()) {
            //     echo "Record inserted successfully";
            // "<td>" .  " <script>". "</td>"
                echo "<script>alert('Se ha insertado la Empresa $nombre'); window.location.replace('../empresas.php');</script>";
            } else {
                echo "Error inserting record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
?>
<!-- <script>
    windows.alert('Si funciona')
    header("../Empresas.php")
</script> -->