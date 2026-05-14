<?php 
require_once __DIR__ . '/../models/Categorias.php';

    class categoriaDAO{
        private PDO $conexao;

        public function __construct(PDO $conexao){
            $this->conexao = $conexao;
        }

        public function adicionarCategoria(Categorias $categoria){
            $sql = "INSERT INTO categorias (nome, tipo, ativo) VALUES (:nome, :tipo, :ativo)";
            $stmt = $this->conexao->prepare($sql);

            return $stmt->execute([
                ':nome' => $categoria->getNome(),
                ':tipo' => $categoria->getTipo(),
                ':ativo' => $categoria->getAtivo()
            ]);
        }

    }
?>