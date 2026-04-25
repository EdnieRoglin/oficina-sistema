<?php  
    class Pecas{
        private $id;
        private string $nomePeca;
        private string $codigo;
        private string $categoria;
        private float $precoCusto;
        private float $precoVenda;
        private int $quantidade;
        private string $observacao;

        public function __construct(string $nomePeca, string $codigo, string $categoria, float $precoCusto, float $precoVenda, int $quantidade, string $observacao){
            $this->nomePeca = $nomePeca;
            $this->codigo = $codigo;
            $this->categoria = $categoria;
            $this->precoCusto = $precoCusto;
            $this->precoVenda = $precoVenda;
            $this->quantidade = $quantidade;
            $this->observacao = $observacao;
        }

        public function getNomePeca(){
            return $this->nomePeca;
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function getPrecoCusto(){
            return $this->precoCusto;
        }

        public function getPrecoVenda(){
            return $this->precoVenda;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function getObservacao(){
            return $this->observacao;
        }

        public function setNomePeca($nomePeca){
            $this->nomePeca = $nomePeca;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function setPrecoCusto($precoCusto){
            $this->precoCusto = $precoCusto;
        }

        public function setPrecoVenda($precoVenda){
            $this->precoVenda = $precoVenda;
        }

        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }

        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }
    }
?>