<?php 
namespace App\Models\Entity;

    class ServicosEntity{
        private $id;
        private string $nome;
        private string $codigo;
        private int $categoria_id;
        private float $preco;
        private string $observacao;

        public function __construct(string $nome, string $codigo, int $categoria_id, float $preco, string $observacao){
            $this->nome = $nome;
            $this->codigo= $codigo;
            $this->categoria_id = $categoria_id;
            $this->preco = $preco;
            $this->observacao = $observacao;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCodigo(){
            return $this->codigo;
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

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
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