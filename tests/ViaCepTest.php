<?php

use PHPUnit\Framework\TestCase;
use GabrielCamurca\ConsultaCep\ws\ViaCep;

final class ViaCepTest extends TestCase
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
    public function testGet(string $input, array $esperado) 
    {
        $resultado = new ViaCep();
        $resultado = $resultado->get($input);

        $this->assertEquals($esperado, $resultado);
    }
}
