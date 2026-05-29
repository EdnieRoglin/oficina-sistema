<?php 
namespace App\Models\entity;

    class CategoriaEntity {
        private $id;
        private string $nome;
        private string $tipo;
        private $ativo;

        public function __construct(string $nome, string $tipo, $ativo = true) {
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->ativo = $ativo;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getAtivo() {
            return $this->ativo;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function setAtivo($ativo) {
            $this->ativo = $ativo;
        }
    }
?>