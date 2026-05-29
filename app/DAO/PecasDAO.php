<?php 
namespace App\DAO;
use App\Models\Entity\PecasEntity;
use PDO;

class PecasDAO{
    private PDO $conexao;

    public function __construct(PDO $conexao){
        $this->conexao = $conexao;
    }
    
    public function listarPecas(){
        $sql = "SELECT * FROM pecas";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function adicionarPeca(PecasEntity $peca){
        $sql = "INSERT INTO pecas (nome, codigo, categoria_id, marca, status, preco_custo, preco_venda, quantidade, observacao)
        VALUES (:nome, :codigo, :categoria_id, :marca, :status, :preco_custo, :preco_venda, :quantidade, :observacao)";

        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([
            ':nome' => $peca->getNome(),
            ':codigo' => $peca->getCodigo(),
            ':categoria_id' => $peca->getCategoriaId(),
            ':marca' => $peca->getMarca(),
            ':status' => $peca->getStatus(),
            ':preco_custo' => $peca->getPrecoCusto(),
            ':preco_venda' => $peca->getPrecoVenda(),
            ':quantidade' => $peca->getQuantidade(),
            ':observacao' => $peca->getObservacao(),
        ]);
    }

    public function editarPeca($id, PecasEntity $peca){
        $sql = "UPDATE pecas SET nome = :nome, codigo = :codigo, categoria_id = :categoria_id, marca = :marca, status = :status, preco_custo = :preco_custo, 
        preco_venda = :preco_venda, quantidade = :quantidade, observacao = :observacao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':nome' => $peca->getNome(),
            ':codigo' => $peca->getCodigo(),
            ':categoria_id' => $peca->getCategoriaId(),
            ':marca' => $peca->getMarca(),
            ':status' => $peca->getStatus(),
            ':preco_custo' => $peca->getPrecoCusto(),
            ':preco_venda' => $peca->getPrecoVenda(),
            ':quantidade' => $peca->getQuantidade(),
            ':observacao' => $peca->getObservacao(),        
        ]);
    }

    public function excluirPeca($id){
        $sql = "DELETE FROM pecas WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
    
    public function listarCategorias(){
        $sql = "SELECT * FROM categorias";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}    
?>