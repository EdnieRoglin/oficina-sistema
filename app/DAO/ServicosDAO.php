<?php

namespace App\DAO;

use App\Models\Entity\ServicoEntity;
use PDO;

class ServicosDAO
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function adicionarServico(ServicoEntity $servico): bool{
        $sql = "INSERT INTO servicos (nomeServico, preco, observacao)
                VALUES (:nome, :preco, :observacao)";

        $stmt = $this->conexao->prepare($sql);

        return $stmt->execute([
            ':nome' => $servico->getNomeServico(),
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
}

?>