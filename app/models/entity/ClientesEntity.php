<?php 
namespace App\Models\entity;

    class ClientesEntity {
        private $id;
        private string $nome;
        private string $tipoPessoa;
        private string $cpfCnpj;
        private string $telefone;
        private string $email;
        private $endereco;

        public function __construct(string $nome, float $tipoPessoa, float $telefone, string $email, $endereco){
            $this->nome = $nome;
            $this->tipoPessoa = $tipoPessoa;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->endereco = $endereco;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getTipoPessoa(){
            return $this->tipoPessoa;
        }

        public function getCpfCpnj(){
            return $this->cpfCnpj;
        }

        public function getTelefone(){
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

        public function setTipoPessoa($tipoPessoa){
            $this->tipoPessoa = $tipoPessoa;
        }

        public function setCpfCnpj($cpfCnpj){
            $this->cpfCnpj = $cpfCnpj;
        }

        public function setTelefone($telefone){
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