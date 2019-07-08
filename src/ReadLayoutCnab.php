<?php 
namespace LayoutCnabRetorno;


class ReadLayoutCnab {

    public $is_valid;
    private $file;
    private $layout;

    public function __construct($file, $layout)
    {
        $this->file = $file;
        $this->layout = $layout;
        
    }

    public function leituraHeader()
    {

      $layout = $this->layout;
      foreach($layout as $item) {
          if($item['tipo'] == 'header'){
            $header["{$item['nomeCampo']}"] = $this->leituraLinha($this->file,$item['posicao_inicial'],$item['tamanho_campo']);
          }
      }
        $teste = 'teste';

    }
    private function leituraLinha($line, $start, $size)
    {
        return substr($line,$start,$size);
    }

    protected function validateFile()
    {
        $file = $this->file;
        if(!$file) {
            throw new \Exception("Não foi encontrado nenhum arquivo para validar");
        }
        
    }

    
}
