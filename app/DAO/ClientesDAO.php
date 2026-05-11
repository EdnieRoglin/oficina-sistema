<?php 
require_once __DIR__ . '/../models/Clientes.php';

    class ClienteDAO {
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

            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return ($cliente ['nome, cpf_cnpj, telefone']);
        }

        public function buscar($termo) {
        // 1. Preparamos o termo com os wildcards %
        $busca = "%" . $termo . "%";

        // 2. SQL que varre nome, código e marca
        $sql = "SELECT p.*, c.nome as nome_categoria 
                FROM pecas p
                JOIN categorias c ON p.categoria_id = c.id
                WHERE p.nome_peca LIKE :busca 
                OR p.codigo LIKE :busca 
                OR p.marca LIKE :busca
                ORDER BY p.nome_peca ASC";

        try {
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(':busca', $busca, PDO::PARAM_STR);
            $stmt->execute();

            // Retorna um array de objetos ou arrays associativos
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro na busca: " . $e->getMessage());
            return [];
        }
    }

    
}
?>