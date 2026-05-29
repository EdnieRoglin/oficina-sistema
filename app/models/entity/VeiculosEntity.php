<?php 
namespace App\Models\Entity;

    class VeiculosEntity{
        private $id;
        private $placa;
        private string $marca;
        private string $chassi;
        private string $modelo;
        private string $ano;
        private string $km;
        private string $cor;
        private $combustivel;
        private $cliente_id;
        private $motorizacao;

        public function __construct($placa, string $chassi, string $marca, string $modelo, string $ano, string $km, string $cor, $combustivel, $motorizacao, $cliente_id){
            $this->placa = $placa;
            $this->marca = $marca;
            $this->chassi = $chassi;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->km = $km;
            $this->cor = $cor;
            $this->combustivel = $combustivel;
            $this->motorizacao = $motorizacao;
            $this->cliente_id = $cliente_id;
        }

        public function getPlaca(){
            return $this->placa; 
        }

        public function getChassi(){
            return $this->chassi;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
           return  $this->modelo;
        }

        public function getAno(){
            return $this->ano;
        }

        public function getKm(){
            return $this->km;
        }

        public function getCor(){
            return $this->cor;
        }

        public function getCombustivel(){
            return $this->combustivel;
        }

        public function getMotorizacao(){
            return $this->motorizacao;
        }

        public function getClienteId(){
            return $this->cliente_id;
        }

        public function setPlaca($placa){
            $this->placa = $placa;
        }

        public function setChassi($chassi){
            $this->chassi = $chassi;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }

        public function setKm($km){
            $this->km = $km;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }

        public function setCombustivel($combustivel){
            $this->combustivel = $combustivel;
        }

        public function setMotorizacao($motorizacao){
            $this->motorizacao = $motorizacao;
        }

        public function setClienteId($cliente_id){
            $this->cliente_id = $cliente_id;
        }
    }
?>