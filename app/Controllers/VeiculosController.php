<?php
namespace App\Controllers;

use App\DAO\VeiculosDAO;
use App\DAO\ClientesDAO;
use App\Models\Entity\VeiculosEntity;
use App\Config\Database;

    class VeiculosController{
        private VeiculosDAO $veiculosDao;
        private ClientesDAO $clientesDao;

        public function __construct(){
            $conexao = Database::conectar();
            $this->veiculosDao = new VeiculosDAO($conexao);
            $this->clientesDao = new ClientesDAO($conexao);
        }

        public function index(){
            $activeMenu = 'veiculos';
            $veiculos = $this->veiculosDao->listarVeiculos();
            require BASE_PATH . '/resources/views/veiculos/page.php';
        }

        public function buscarClientes(){
            $termo = $_GET['termo'] ?? '';

            // Só busca se tiver pelo menos 2 caracteres
            if(strlen(trim($termo)) < 2){
                header('Content-Type: application/json');
                echo json_encode([]);
                return;
            }

            $clientes = $this->clientesDao->buscarClientes(trim($termo));

            header('Content-Type: application/json');
            echo json_encode($clientes);
        }

        public function adicionarVeiculo(){
            $veiculo = new VeiculosEntity(
                $_POST['placa'],
                $_POST['chassi'] ?? '',
                $_POST['marca'],
                $_POST['modelo'],
                $_POST['ano'],
                $_POST['km'] ?? '',
                $_POST['cor'] ?? '',
                $_POST['combustivel'] ?? '',
                $_POST['motorizacao'] ?? '',
                $_POST['proprietario_id']
            );

            $this->veiculosDao->adicionarVeiculo($veiculo);

            header('Location: /oficina-sistema/public/veiculos');
            exit;
        }

        public function editarVeiculo(){
            $id = $_POST['id'];
            $veiculo = new VeiculosEntity(
                $_POST['placa'],
                $_POST['chassi'] ?? '',
                $_POST['marca'],
                $_POST['modelo'],
                $_POST['ano'],
                $_POST['km'] ?? '',
                $_POST['cor'] ?? '',
                $_POST['combustivel'] ?? '',
                $_POST['motorizacao'] ?? '',
                $_POST['proprietario_id']
            );

            $this->veiculosDao->editarVeiculo($id, $veiculo);

            header('Location: /oficina-sistema/public/veiculos');
            exit;   
        }
    }
?>