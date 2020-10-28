<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/CuentaCorriente.php';
require_once 'modelo/Proveedor.php';

$provee = new Proveedor();
$provee->Cuit= "20-1232444-3";
$provee->Email= "adidas@gmail.com";
$provee->RazonSocial= "Adidas";

$provee2 = new Proveedor();
$provee2->Cuit= "20-12554444-3";
$provee2->Email= "umbro@gmail.com";
$provee2->RazonSocial= "umbro";

$provee3 = new Proveedor();
$provee3->Cuit= "20-1232000-3";
$provee3->Email= "nike@gmail.com";
$provee3->RazonSocial= "nike";

$provee4 = new Proveedor();
$provee4->Cuit= "20-1232232-3";
$provee4->Email= "puma@gmail.com";
$provee4->RazonSocial= "puma";

$cc1 = new CuentaCorriente();
$cc1->NroCuentaCorriente= 20;
$cc1->Saldo= "$10.000";
$cc1->Proveedor= $provee;

$cc2 = new CuentaCorriente();
$cc2->NroCuentaCorriente= 12;
$cc2->Saldo= "$10.000";
$cc2->Proveedor= $provee2;

$cc3 = new CuentaCorriente();
$cc3->NroCuentaCorriente= 15;
$cc3->Saldo= "$16.400";
$cc3->Proveedor= $provee3;

$cc4 = new CuentaCorriente();
$cc4->NroCuentaCorriente= 10;
$cc4->Proveedor= $provee4;
$cc4->Saldo= "$14.000";

$array = array();
$array[]=$cc1;
$array[]=$cc2;
$array[]=$cc3;
$array[]=$cc4;

echo json_encode($array);