<?php
	include 'BasedeDatos/conexion.php';
?>
<?php
    if(isset($_POST['nombrecompleto'])){
        $nombre = $_POST['nombrecompleto'];
        $sql = "SELECT * FROM Contactos WHERE nombrecompleto LIKE '%$nombre%'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT * FROM Contactos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    foreach ($results as $row) {
        echo "<tr>";
        echo "<th scope='row'>" . $row['Id'] . "</th>";
        echo "<td scope='row'>" . $row['nombrecompleto'] . "</td>";
        echo "<td>" . $row['Telefono'] . "</td>";
        echo "<td>" . $row['Empresa'] . "</td>";
        echo "<td>" . $row['Cargo'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" .  "<a href='Editaje/editarContacto.php?id=" . $row['Id'] . "' class='btn btn-outline-primary'>Editar</a></td>";
        echo "</tr>";
    }
?>
<script>
    $(document).on('click', '.btn-outline-primary', function(){
        var id = $(this).data('id');
        window.location.href = 'editar.php?id=' + id;
    });
</script>