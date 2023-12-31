<?php

use PHPUnit\Framework\TestCase;
use GabrielCamurca\ConsultaCep\Search;

final class SearchTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public static function testData(): array
    {
        return [
            "Endereço Qualquer" => [
                "60543462",
                [
                    "cep" => "60543-462",
                    "logradouro" => "Rua José Martins",
                    "complemento" => "de 946/947 a 1844/1845",
                    "bairro" => "Bom Jardim",
                    "localidade" => "Fortaleza",
                    "uf" => "CE",
                    "ibge" => "2304400",
                    "gia" => "",
                    "ddd" => "85",
                    "siafi" => "1389"
                ]
            ],
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }

    /**
     * @dataProvider testData
     */

    public function testGetFromServer(string $input, array $esperado) {
        $resultado = new Search();
        $resultado = $resultado->GetFromServer($input);

        $this->assertEquals($esperado, $resultado);
    }


    /**
     * @dataProvider testData
     */
    public function testGetAddressByZipCodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search();
        $resultado = $resultado->getAddressByZipCode($input);

        $this->assertEquals($esperado, $resultado);
    }
}
