<?php 
namespace App\DAO;
use App\Models\Entity\VeiculosEntity;
use PDO;

    class VeiculosDAO{
        private PDO $conexao;

        public function __construct(PDO $conexao){
            $this->conexao = $conexao;
        }

        public function adicionarVeiculo(VeiculosEntity $veiculo): bool {
            $sql = "INSERT INTO veiculos (placa, chassi, marca, modelo, ano, km, cor, combustivel, motorizacao, cliente_id)
            VALUES (:placa, :chassi, :marca, :modelo, :ano, :km, :cor, :combustivel, :motorizacao, :cliente_id)";

            $stmt = $this->conexao->prepare($sql);

            return $stmt->execute([
                ':placa' => $veiculo->getPlaca(),
                ':chassi' => $veiculo->getChassi(),
                ':marca' => $veiculo->getMarca(),
                ':modelo' => $veiculo->getModelo(),
                ':ano' => $veiculo->getAno(),
                ':km' => $veiculo->getKm(),
                ':cor' => $veiculo->getCor(),
                ':combustivel' => $veiculo->getCombustivel(),
                ':motorizacao' => $veiculo->getMotorizacao(),
                ':cliente_id' => $veiculo->getClienteId(),
            ]);
        }

        public function editarVeiculo($id, VeiculosEntity $veiculo): bool {
            $sql = "UPDATE veiculos SET 
                placa = :placa, 
                chassi = :chassi, 
                marca = :marca, 
                modelo = :modelo, 
                ano = :ano, 
                km = :km, 
                cor = :cor, 
                combustivel = :combustivel,
                motorizacao = :motorizacao, 
                cliente_id = :cliente_id
                WHERE id = :id";

            $stmt = $this->conexao->prepare($sql);

            return $stmt->execute([
                ':id' => $id,
                ':placa' => $veiculo->getPlaca(),
                ':chassi' => $veiculo->getChassi(),
                ':marca' => $veiculo->getMarca(),
                ':modelo' => $veiculo->getModelo(),
                ':ano' => $veiculo->getAno(),
                ':km' => $veiculo->getKm(),
                ':cor' => $veiculo->getCor(),
                ':combustivel' => $veiculo->getCombustivel(),
                ':motorizacao' => $veiculo->getMotorizacao(),
                ':cliente_id' => $veiculo->getClienteId(),
            ]);
        }

        public function listarVeiculos(){
            $sql = "SELECT v.*, c.nome as cliente_nome 
                    FROM veiculos v 
                    LEFT JOIN clientes c ON v.cliente_id = c.id";
            $stmt = $this->conexao->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    
?>