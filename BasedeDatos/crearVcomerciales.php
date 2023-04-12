<?php
    include '../BasedeDatos/conexion.php';

    if (isset($_POST['nombrecompleto']) && isset($_POST['Telefono']) && isset($_POST['Empresa']) && isset($_POST['Cargo']) && isset($_POST['Email']) && isset($_POST['Historial'])) {
        $nombre = $_POST['nombrecompleto'];
        $telefono = $_POST['Telefono'];
        $empresa = $_POST['Empresa'];
        $cargo = $_POST['Cargo'];
        $email = $_POST['Email'];
        $historial = $_POST['Historial'];

        try {
            $sql = $conn->prepare("INSERT INTO Contactos (nombrecompleto, Telefono, Empresa, Cargo, Email, Historial) VALUES (?, ?, ?, ?, ?, ?)");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $telefono);
            $sql->bindParam(3, $empresa);
            $sql->bindParam(4, $cargo);
            $sql->bindParam(5, $email);
            $sql->bindParam(6, $historial);
            if ($sql->execute()) {
            //     echo "Record inserted successfully";
            // "<td>" .  " <script>". "</td>"
                echo "<script>alert('Se ha insertado el Contacto de $nombre'); window.location.replace('../contactos.php');</script>";
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
    header("../contactos.php")
</script> -->