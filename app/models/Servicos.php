<?php 
    class Servicos{
        private $id;
        private string $nomeServico;
        private string $categoria;
        private float $preco;
        private string $observacao;

        public function __construct(string $nomeServico, string $categoria, float $preco, string $observacao){
            $this->nomeServico = $nomeServico;
            $this->categoria = $categoria;
            $this->preco = $preco;
            $this->observacao = $observacao;
        }

        public function getNomeServico(){
            return $this->nomeServico;
        }

        public function getCategoria(){
            return $this->categoria;
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

        public function setCategoria($categoria){
            $this->categoria = $categoria;
         }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }

    }
?>