<?php  
namespace App\Models\entity;

    class PecasEntity{
        private $id;
        private string $nome;
        private string $codigo;
        private int $categoria_id;
        private string $marca;
        private string $status;
        private float $precoCusto;
        private float $precoVenda;
        private int $quantidade;
        private string $observacao;

        public function __construct(string $nome, int $categoria_id, ?string $codigo, ?string $marca, string $status, float $precoCusto, float $precoVenda, int $quantidade, ?string $observacao){
            $this->nome = $nome;
            $this->categoria_id = $categoria_id;
            $this->codigo = $codigo ?? '';
            $this->marca = $marca ?? '';
            $this->status = $status;
            $this->precoCusto = $precoCusto;
            $this->precoVenda = $precoVenda;
            $this->quantidade = $quantidade;
            $this->observacao = $observacao ?? '';
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCategoriaId(){
            return $this->categoria_id;
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getStatus(){
            return $this->status;
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

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCategoriaId($categoria_id){
            $this->categoria_id = $categoria_id;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setStatus($status){
            $this->status = $status;
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