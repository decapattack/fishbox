<?php
class LoteCupomsController extends AppController{
    private $listaCupoms = array();
    public function geraLote(){
        $lote_cupom_id = '';
        for($i = 0; $i < 9; $i++){
            $this->$listaCupoms[$i] = array(
                "lote_cupom_id" => $lote_cupom_id,
                "cupom" => $this->$geraCupom(),
                "data_criacao" => "now()"
            );
        }
    }
    
    public function geraCupom(){
        $letrasNumeros = array('a','b','c','d','e','f','g','h','i','j',
            'k','l','m','n','o','p','q','r','s','t','u','w','x','y','z',
            '0','1','2','3','4','5','6','7','8','9');
        $codigo = '';
        $quant = count($letrasNumeros);
        for($i = 0; $i < 16; $i++){
            $codigo .= $letrasNumeros[mt_rand(0, $quant-1)];
        }
        return $codigo;
    }
    
    public function gravaLote(){
        
    }
    
    public function mostraLote(){
        
    }
}
?>