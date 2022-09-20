<?php
include "MoscotaModel.php";

$nuevomascota = new mascotas();

if(isset($_POST['btnGuardar']))
{
    $nuevomascota->Guardarmascotas($_POST['IdMascota'],$_POST['Mascotas']);
    header('Location: VistaMascota.php');
}