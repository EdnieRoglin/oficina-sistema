<?php 
    class Servicos{
        private $id;
        private string $nomeServico;
        private int $categoria_id;
        private float $preco;
        private string $observacao;

        public function __construct(string $nomeServico, int $categoria_id, float $preco, string $observacao){
            $this->nomeServico = $nomeServico;
            $this->categoria_id = $categoria_id;
            $this->preco = $preco;
            $this->observacao = $observacao;
        }

        public function getNomeServico(){
            return $this->nomeServico;
        }

        public function getCategoriaId(){
            return $this->categoria_id;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function getObservacao(){
            return $this->observacao;
        }

        public function setNomeServico($nomeServico){
            $this->nomeServico = $nomeServico;
        }

        public function setCategoriaId($categoria_id){
            $this->categoria_id = $categoria_id;
         }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }

    }
?>