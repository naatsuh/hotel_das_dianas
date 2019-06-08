<?php


class Reservas {
    public $id;
    public $quarto;
    public $preco_diaria;
    public $preco_total;
    public $entrada_data;
    public $saida_data;
    public $de_onde_vem;
    public $pra_onde_vai;

    public function __construct($id, $quarto, $preco_diaria, $preco_total, $entrada_data, $saida_data, $de_onde_vem, $pra_onde_vai) {
        $this->id = $id;
        $this->quarto = $quarto;
        $this->preco_diaria = $preco_diaria;
        $this->preco_total = $preco_total;
        $this->entrada_data = $entrada_data;
        $this->saida_data = $saida_data;
        $this->de_onde_vem = $de_onde_vem;
        $this->pra_onde_vai = $pra_onde_vai;
    }
}
?>