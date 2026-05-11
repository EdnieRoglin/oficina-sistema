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
        $stmt = $this->conexao->query("SELECT * FROM servicos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>