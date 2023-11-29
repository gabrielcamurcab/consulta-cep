<?php

namespace GabrielCamurca\ConsultaCep;

use GabrielCamurca\ConsultaCep\ws\ViaCep;

class Search
{
    public function getAddressByZipCode(string $zipCode): array
    {
        $zipCode = preg_replace("/[^0-9]/", "", $zipCode);

        return $this->getFromServer($zipCode);

    }

    public function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }
}
