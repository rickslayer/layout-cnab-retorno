# layout-cnab-retorno 
## CNAB - Centro Nacional de Automação Bancária
Facilitador para importação dos arquivos de retorno do CNAB utilizando layout de arquivos .JSON

## TODO: A conversão com o PADRÃO SEBRAE ainda está incompleta!!

*Utilize o chat do Gitter para iniciar discussões específicas sobre o desenvolvimento deste pacote.*


[![Latest Stable Version][ico-stable]][link-packagist]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![License][ico-license]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

[![Issues][ico-issues]][link-issues]
[![Forks][ico-forks]][link-forks]
[![Stars][ico-stars]][link-stars]

## Bancos atendidos

Na pasta /layouts já contempla o layout do Retorno do PagFor Bradesco 500 posições.

Vamos lutar para que esta pasta contenha todos os layouts possíveis.

Este pacote é aderente com [PSR-4]. Se você observar negligências de conformidade, por favor envie um patch via pull request.

[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md

## Install

**Este pacote está listado no [Packgist](https://packagist.org/) foi desenvolvido para uso do [Composer](https://getcomposer.org/), portanto não será explicitada nenhuma alternativa de instalação.**

*E deve ser instalado com:*
```bash
composer require rickslayer/layout-cnab-retorno
```
Ou ainda alterando o composer.json do seu aplicativo inserindo:
```json
"require": {
    "rickslayer/layout-cnab-retorno" : ""
}
```

## Requirements

Para que este pacote possa funcionar são necessários os seguintes requisitos do PHP e outros pacotes dos quais esse depende.

- PHP 5.x (recomendável PHP 7.2) 
- ext-dom
- ext-json
- ext-gd
- ext-mbstring
- ext-mcrypt
- ext-zip


## Como eu faço uso desta API no meu projeto?

Primeiro, esta API faz uso dos recursos mais atuais do PHP para classes e objetos, portanto abaixo vai um exemplo ERRADO de uso:
```
require 'sped-nfe/src/Make.php';

$nfe = new Make();
```
Portanto, você deve primeiro entender que para usar esta API você precisará trabalhar com NAMESPACES pois esta API trabalha com NAMESPACES.

Agora que você sabe que NAMESPACES é requerido, o uso correto para o exemplo acima seria:
```
// VENDOR_DIR = pasta vendor da sua instalação composer
require VENDOR_DIR . 'autoload.php';

use NFePHP\NFe\Make;

$nfe = new Make();
```


## Documentation

O processo de documentação ainda está no inicio, mas já existem alguns documentos úteis.

[Documentação](docs/Funcionalidades.md)

## Contributing


## Change log

Acompanhe o [CHANGELOG](CHANGELOG.md) para maiores informações sobre as alterações recentes.

## Testing

Todos os testes são desenvolvidos para operar com o PHPUNIT

## Security

Caso você encontre algum problema relativo a segurança, por favor envie um email diretamente aos mantenedores do pacote ao invés de abrir um ISSUE.

## Credits

Paulo Ricardo Almeida (owner and developer)

## License

Este pacote está diponibilizado sob LGPLv3 ou MIT License (MIT). Leia  [Arquivo de Licença](LICENSE.md) para maiores informações.

[link-packagist]: https://packagist.org/packages/rickslayer/layout-cnab-retorno
[link-travis]: https://travis-ci.org/nfephp-org/sped-nfe
[link-scrutinizer]: https://scrutinizer-ci.com/g/nfephp-org/sped-nfe/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/nfephp-org/sped-nfe
[link-downloads]: https://packagist.org/packages/rickslayer/layout-cnab-retorno
[link-author]: https://github.com/rickslayer
[link-issues]: https://github.com/rickslayer/layout-cnab-retorno/issues
[link-forks]: https://github.com/rickslayer/layout-cnab-retorno/network
[link-stars]: https://github.com/rickslayer/layout-cnab-retorno/stargazers
