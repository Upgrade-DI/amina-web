<?php

include_once('../../Connections/config.php');
include_once ("".$root_folder."/connectMySql.php");
include_once ("".$root_folder."/sudi_functions.php");

// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$position = $_POST['position'];
$type = $_POST['type'];

// Escapar las variables para seguridad
$name = mysqli_real_escape_string($connectMySql, $name);
$email = mysqli_real_escape_string($connectMySql, $email);
$phone = mysqli_real_escape_string($connectMySql, $phone);
$company = mysqli_real_escape_string($connectMySql, $company);
$position = mysqli_real_escape_string($connectMySql, $position);
$type = mysqli_real_escape_string($connectMySql, $type);

    // Preparar la consulta de inserción
    $query_rsIns = sprintf(
    "INSERT INTO `amina_registration_tb` (`reg_name`, `reg_email`, `reg_contact_number`, `reg_company`, `reg_position`, `reg_user_type`) 
    VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
    $name, $email, $phone, $company, $position, $type
    );

    mysqli_query($connectMySql, $query_rsIns);

    echo 1;

?>