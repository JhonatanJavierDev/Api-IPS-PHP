<?php

// En este array iran los paises junto a sus direcciones ip
$ip_list = array(
    'Argentina' => '200.55.5.5',
    'Bolivia' => '200.12.1.1',
    'Brasil' => '200.10.5.5',
    'Chile' => '200.16.5.5',
    'Colombia' => '200.24.5.5',
    'Costa Rica' => '200.8.5.5',
    'Cuba' => '200.6.5.5',
    'Ecuador' => '200.2.5.5',
    'El Salvador' => '200.4.5.5',
    'Guatemala' => '200.18.5.5',
    'Honduras' => '200.14.5.5',
    'México' => '200.20.5.5',
    'Nicaragua' => '200.22.5.5',
    'Panamá' => '200.26.5.5',
    'Paraguay' => '200.28.5.5',
    'Perú' => '200.30.5.5',
    'Puerto Rico' => '200.32.5.5',
    'República Dominicana' => '200.34.5.5',
    'Uruguay' => '200.36.5.5',
    'Venezuela' => '200.38.5.5',
    'España' => '200.40.5.5'
);

//Convertimos el array en formato JSON
$json_data = json_encode($ip_list);
file_put_contents('ip_list.json', $json_data);

?>
