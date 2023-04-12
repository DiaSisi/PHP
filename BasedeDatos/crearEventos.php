<?php
    include '../BasedeDatos/conexion.php';
    echo $_POST['Nombre'];
    echo $_POST['Descripción'];
    echo $_POST['Fecha'];
    echo $_POST['Hora'];
    echo $_POST['Ubicación'];
    echo $_POST['Notas'];

    if (isset($_POST['Nombre']) && isset($_POST['Descripción']) && isset($_POST['Fecha']) && isset($_POST['Hora']) && isset($_POST['Ubicación']) && isset($_POST['Notas'])) {
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripción'];
        $fecha = $_POST['Fecha'];
        $hora = $_POST['Hora'];
        $ubicacion = $_POST['Ubicación'];
        $notas = $_POST['Notas'];

        try {
            $sql = $conn->prepare("INSERT INTO Eventos (Nombre, Descripción, Fecha, Hora, Ubicación, Notas) VALUES (?, ?, ?, ?, ?, ?)");
            $sql->bindParam(1, $nombre);
            $sql->bindParam(2, $descripcion);
            $sql->bindParam(3, $fecha);
            $sql->bindParam(4, $hora);
            $sql->bindParam(5, $ubicación);
            $sql->bindParam(6, $notas);
            if ($sql->execute()) {
            //     echo "Record inserted successfully";
            // "<td>" .  " <script>". "</td>"
                echo "<script>alert('Se ha insertado el Evento $nombre'); window.location.replace('../eventos.php');</script>";
            } else {
                echo "Error inserting record";
            }
    
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    } else {
        echo "algo pasa";
    }
?>
<!-- <script>
    windows.alert('Si funciona')
    header("../eventos.php")
</script> -->