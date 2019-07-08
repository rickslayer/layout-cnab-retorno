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
      $layout = json_decode($this->layout, true);
      $header = array();
      foreach($layout as $item) {
          if($item['tipo'] == 'header'){
            $header["{$item['nome_campo']}"] = $this->leituraLinha($this->file[0],$item['posicao_inicial'],$item['tamanho_campo']);
          }
      }
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
       return $headerLote;
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
