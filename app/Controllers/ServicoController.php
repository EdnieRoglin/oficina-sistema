<?php
namespace App\Controllers;

use App\DAO\ServicosDAO;
use App\Models\Entity\ServicosEntity;
use App\Config\Database;

class ServicoController
{
    private ServicosDAO $servicosDao;
    private CategoriaDAO $categoriaDao;

    public function __construct(){
        $this->servicosDao = new ServicosDAO(Database::conectar());
    }

    public function index()
    {
        $activeMenu = 'servicos'; // ou clientes, dashboard, etc
        $ticketMedio = $this->servicosDao->ticketMedio();
        $servicos = $this->servicosDao->listarServicos();
        $totalServicos = $this->servicosDao->todoServicos();
        $categorias = $this->servicosDao->listarCategorias();
        require BASE_PATH . '/resources/views/servicos/page.php';
    }

    public function excluir(){
        $id = $_GET['id'] ?? null;

        if ($id) {
            $this->servicosDao->excluirServico($id);
        }

        header('Location: /oficina-sistema/public/servicos');
        exit;
    }

    public function adicionarServico(){
        $servico = new ServicosEntity(
            $_POST['nome'],
            $_POST['codigo'] ?? null,
            (int) $_POST['categoria_id'],
            (float) $_POST['preco'],
            $_POST['observacao'] ?? null
        );

        $this->servicosDao->adicionarServico($servico);

        header('Location: /oficina-sistema/public/servicos');
        exit;
    }

    public function editarServico(){
        $id = $_POST['id'];
        $servico = new ServicosEntity(
            $_POST['nome'],
            $_POST['codigo'] ?? null,
            (int) $_POST['categoria_id'],
            (float) $_POST['preco'],
            $_POST['observacao'] ?? null
        );

        $this->servicosDao->editarServico($id, $servico);

        header('Location: /oficina-sistema/public/servicos');
        exit;
    }
}
