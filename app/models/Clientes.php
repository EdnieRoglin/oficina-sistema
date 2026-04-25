<?php 
    class Clientes {
        private $id;
        private string $nome;
        private float $cpf;
        private float $telefone;
        private string $email;
        private $endereco;

        public function __construct(string $nome, float $cpf, float $telefone, string $email, $endereco){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->endereco = $endereco;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function gettelefone(){
            return $this->telefone;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function settelefone($telefone){
            $this->telefone = $telefone;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

    }
?>