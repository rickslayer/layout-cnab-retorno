<?php 
/*
 * This file is part of the layout-cnab-retorno package.
 *
 * (c) Paulo Almeida <paulo@actio.net.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace LayoutCnabRetorno;


class ReadLayoutCnab {

    public $is_valid;
    private $file;
    private $layout;
    private $masterkey = 0;

    public function __construct($file, $layout)
    {
        $this->file = $file;
        $this->layout = $layout;
        
    }

    public function leituraHeader()
    {
      $layout = json_decode($this->layout, true);
      $header = array();
      foreach($layout as $item) {
          if($item['tipo'] == 'header'){
            $header["{$item['nome_campo']}"] = $this->leituraLinha($this->file[0],$item['posicao_inicial'],$item['tamanho_campo']);
          }
      }
      $this->masterkey = count($header) == 0 ? 0 : 1;
       return $header;
    }
    public function leituraHeaderLote()
    {
      $layout = json_decode($this->layout, true);
      $headerLote = array();
      foreach($layout as $item) {
          if($item['tipo'] == 'header-lote'){
            $headerLote["{$item['nome_campo']}"] = $this->leituraLinha($this->file[1],$item['posicao_inicial'],$item['tamanho_campo']);
          }
      }
       $count = count($headerLote) + $this->masterkey;
       $this->masterkey = $count;
       return $headerLote;
    }

    public function leituraTitulos()
    {
        $layout = json_decode($this->layout, true);
        array_pop($this->file);
        for($i = $this->masterkey; $i < count($this->file); $i++) {
            foreach($layout as $item) {
                if($item['tipo'] == 'lote'){
                    $chave = trim($item['campo_vinculo']) ? trim($item['campo_vinculo']) : trim($item['nome_campo']);
                    $titulos["{$chave}"] = $this->leituraLinha($this->file[$i],$item['posicao_inicial'],$item['tamanho_campo']);
                }
            }
            $aTitulos[] = $titulos;
        }
        return $aTitulos;

    }

    private function leituraLinha($line, $start, $size)
    {
        return substr($line,$start-1,$size);
    }

    protected function validateFile()
    {
        $file = $this->file;
        if(!$file) {
            throw new \Exception("Não foi encontrado nenhum arquivo para validar");
        }
    }
}
