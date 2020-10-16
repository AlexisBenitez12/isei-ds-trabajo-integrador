<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/CuentaCorriente.php';
require_once 'modelo/Proveedor.php';

$cc1 = new CuentaCorriente();
$cc1->NroCuentaCorriente= 20;
$cc1->RazonSocial= "Adidas";
$cc1->Proveedor= "1";
$cc1->Cuit= "20-1232444-3";
$cc1->Email= "adidas@gmail.com";
$cc1->Saldo= "$10.000";

$cc2 = new CuentaCorriente();
$cc2->NroCuentaCorriente= 12;
$cc2->RazonSocial= "umbro";
$cc2->Proveedor= "2";
$cc2->Cuit= "20-12554444-3";
$cc2->Email= "umbro@gmail.com";
$cc2->Saldo= "$10.000";

$cc3 = new CuentaCorriente();
$cc3->NroCuentaCorriente= 15;
$cc3->RazonSocial= "nike";
$cc3->Proveedor= "3";
$cc3->Cuit= "20-1232000-3";
$cc3->Email= "nike@gmail.com";
$cc3->Saldo= "$16.400";

$cc4 = new CuentaCorriente();
$cc4->NroCuentaCorriente= 10;
$cc4->RazonSocial= "puma";
$cc4->Proveedor= "4";
$cc4->Cuit= "20-1232232-3";
$cc4->Email= "puma@gmail.com";
$cc4->Saldo= "$14.000";

$array = array();
$array[]=$cc1;
$array[]=$cc2;
$array[]=$cc3;
$array[]=$cc4;

echo json_encode($array);