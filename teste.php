<?php

require_once "vendor/autoload.php";

use GabrielCamurca\ConsultaCep\Search;

$busca = new Search;

$resultado = $busca->getAddressByZipCode('60543462');

print_r($resultado);