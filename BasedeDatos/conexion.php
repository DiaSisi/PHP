<?php
$serverName = "LAPTOP-1A6DB033\SQLEXPRESS"; //serverName\instanceName
$database = "ProChile";

// Crea una conexión PDO
try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database;TrustServerCertificate=true", "", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error al conectarse a SQL Server: " . $e->getMessage();
}
?>