<?php 
    class Veiculos{
        private $id;
        private $placa;
        private string $marca;
        private string $modelo;
        private float $ano;
        private float $kmRodado;
        private string $cor;
        private $cliente_id;
        private $motorizacao;

        public function __construct($placa, string $marca, string $modelo, float $ano, float $kmRodado, string $cor, $motorizacao, $cliente_id){
            $this->placa = $placa;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->kmRodado = $kmRodado;
            $this->cor = $cor;
            $this->motorizacao = $motorizacao;
            $this->cliente_id = $cliente_id;
        }

        public function getPlaca(){
            return $this->placa; 
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

        public function getKmRodade(){
            return $this->kmRodado;
        }

        public function getCor(){
            return $this->cor;
        }

        public function getMotorizacao(){
            return $this->motorizacao;
        }

        public function getcliente_id(){
            $this->cliente_id;
        }

        public function setPlaca($placa){
            $this->placa = $placa;
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

        public function setKmRodade($kmRodado){
            $this->kmRodado = $kmRodado;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }

        public function setMotorizacao($motorizacao){
            $this->motorizacao = $motorizacao;
        }

        public function setClite($cliente_id){
            $this->cliente_id = $cliente_id;
        }
    }
?>