<?php 
namespace App\DAO;
use App\Models\Entity\ClientesEntity;
use PDO;

    class ClientesDAO {
        private PDO $conexao;

        public function __construct(PDO $conexao){
            $this->conexao = $conexao;
        }

        public function adicionarCliente(Clientes $cliente){
            $sql = "INSERT INTO clientes(nome, tipo_pessoa, cpf_cnpj, telefone, email, endereco) VALUES (:nome, :tipo_pessoa, :cpf_cnpj, :telefone, :email, :ednereco)";
            $stmt = $this->conexao->prepare($sql);

            return $stmt->execute([
                ':nome' => $cliente->getNome(),
                ':tipo_pessoa' => $cliente->getTipoPessoa(),
                ':cpf_cnpj' => $cliente->getCpfCpnj(),
                ':telefone' => $cliente->gettelefone(),
                ':email' => $cliente->getEmail(),
                ':endereco' => $cliente->getEndereco()
            ]);
        }


        public function listarClientes(){
            $sql = "SELECT * FROM clientes";
            $stmt = $this->conexao->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function buscarClientes($termo) {
        $busca = "%" . $termo . "%";

        $sql = "SELECT id, nome, cpf_cnpj, telefone 
                FROM clientes
                WHERE nome LIKE :busca 
                OR cpf_cnpj LIKE :busca 
                OR telefone LIKE :busca
                ORDER BY nome ASC
                LIMIT 10";

        try {
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':busca', $busca, PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Erro na busca de clientes: " . $e->getMessage());
            return [];
        }
    }

    
}
?>