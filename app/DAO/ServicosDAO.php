<?php
namespace App\DAO;
use App\Models\Entity\ServicoEntity;
use PDO;

class ServicosDAO{
    private PDO $conexao;

    public function __construct(PDO $conexao){
        $this->conexao = $conexao;
    }

    public function adicionarServico(ServicoEntity $servico): bool{
        $sql = "INSERT INTO servicos (nome, codigo, categoria_id, preco, observacao)
                VALUES (:nome, :codigo, :categoria_id, :preco, :observacao)";

        $stmt = $this->conexao->prepare($sql);

        return $stmt->execute([
            ':nome' => $servico->getNome(),
            ':codigo' => $servico->getCodigo(),
            ':categoria_id' => $servico->getCategoriaId(),
            ':preco' => $servico->getPreco(),
            ':observacao' => $servico->getObservacao(),
        ]);
    }

    public function listarServicos(): array{
        $sql = "SELECT s.*, c.nome as nome_categoria 
                FROM servicos s
                LEFT JOIN categorias c ON s.categoria_id = c.id";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function todoServicos(){
        $sql = "SELECT COUNT(*) AS total FROM servicos";
        $stmt = $this->conexao->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function excluirServico($id){
        $sql = "DELETE FROM servicos WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    public function editarServico($id, ServicoEntity $servico): bool{
        $sql = "UPDATE servicos SET nome = :nome, codigo = :codigo, categoria_id = :categoria_id, preco = :preco, observacao = :observacao WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':nome' => $servico->getNome(),
            ':codigo' => $servico->getCodigo(),
            ':categoria_id' => $servico->getCategoriaId(),
            ':preco' => $servico->getPreco(),
            ':observacao' => $servico->getObservacao(),
        ]);
    }

    public function listarCategorias(){
        $sql = "SELECT * FROM categorias";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ticketMedio(){
        $sql = "SELECT SUM(preco) AS ticket_medio FROM servicos";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>