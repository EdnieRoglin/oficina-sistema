<?php
namespace App\Controllers;

use App\Config\Database;
use App\DAO\ClientesDAO;
use App\Models\entity\ClientesEntity;

class ClienteController{
    private ClientesDAO $clientesDao;

    public function __construct(){
        $this->clientesDao = new ClientesDAO(Database::conectar());
    }

    public function index(){
        $activeMenu = 'clientes';
        $clientes = $this->clientesDao->listarClientes();
        require BASE_PATH . '/resources/views/clientes/page.php';
    }

    public function adicionarCliente(){
            $peca = new ClientesEntity(
                $_POST['nome'],
                $_POST['cpf_cnpj'] ?? null,
                $_POST['telefone'] ?? null,
                $_POST['email'],
                $_POST['endereco'],
            );

            $this->clienteDao->adicionarCliente($cliente);
            header('Location: /oficina-sistema/public/clientes');
            exit;
    }


}

?>