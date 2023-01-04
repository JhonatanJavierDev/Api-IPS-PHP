<?php

// Hacemos la conexion a nuestra base de datos
$db = new mysqli('localhost', 'root', '', 'mibasededatos');

// Obtenemos todas las direcciones ips(Debes crear una bd, que las contenga)
/*
Crea una base de datos con las siguientes tablas

*country

*ip

*/
$query = "SELECT * FROM countries";
$result = $db->query($query);

$ip_list = array();

while ($row = $result->fetch_assoc()) {
    $ip_list[$row['country']] = $row['ip'];
}

// Esto es un sencillo ejercicio xd no es hate, para denegar la conexion
if (in_array($_SERVER['REMOTE_ADDR'], $ip_list['Venezuela']) || in_array($_SERVER['REMOTE_ADDR'], $ip_list['República Dominicana'])) {
    exit;
}

// Devolvemos la lista de paises al JSON
header('Content-Type: application/json');
echo json_encode($ip_list);

?>
