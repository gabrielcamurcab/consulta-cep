# consulta-cep

[![Latest Stable Version](https://poser.pugx.org/gabrielcamurcab/cep-busca/v)](https://packagist.org/packages/gabrielcamurcab/cep-busca)
[![Total Downloads](https://poser.pugx.org/gabrielcamurcab/cep-busca/downloads)](https://packagist.org/packages/gabrielcamurcab/cep-busca)
[![License](https://poser.pugx.org/gabrielcamurcab/cep-busca/license)](https://packagist.org/packages/gabrielcamurcab/cep-busca)

Esta biblioteca realiza uma consulta de CEP (Zip Code) brasileiro, utilizando a API aberta do ViaCEP.

## Instalação

Instale o pacote via Composer:

```bash
composer require gabrielcamurcab/cep-busca

## Utilização

Para utilizar a lib, basta:

```bash
use GabrielCamurca\ConsultaCep\Search;
$result = new Search();
$result = $result->getAddressByZipCode('00000-000');