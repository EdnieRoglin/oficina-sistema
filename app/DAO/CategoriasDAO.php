<?php 
namespace App\DAO;

use App\Models\Categorias;
use PDO;

    class CategoriaDAO{
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

        public function listarCategorias(){
            $sql = "SELECT * FROM categorias";
            $stmt = $this->conexao->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>