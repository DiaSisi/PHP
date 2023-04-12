<?php
	include 'BasedeDatos/conexion.php';
?>
<?php
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $sql = "SELECT * FROM Productos WHERE nombre LIKE '%$nombre%'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $sql = "SELECT * FROM Productos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    foreach ($results as $row) {
        echo "<tr>";
        echo "<th scope='row'>" . $row['Id'] . "</th>";
        echo "<td scope='row'>" . $row['Nombre'] . "</td>";
        echo "<td>" . $row['Descripción'] . "</td>";
        echo "<td>" . $row['Categoría'] . "</td>";
        echo "<td>" . $row['País'] . "</td>";
        echo "<td>" . $row['Notas'] . "</td>";
        echo "<td>" .  "<a href='Editaje/editarProductos.php?id=" . $row['Id'] . "' class='btn btn-outline-primary'>Editar</a></td>";
        echo "</tr>";
    }
?>
<script>
    $(document).on('click', '.btn-outline-primary', function(){
        var id = $(this).data('id');
        window.location.href = 'editar.php?id=' + id;
    });
</script>