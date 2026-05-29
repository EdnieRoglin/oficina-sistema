<?php 
namespace App\Controllers;

use App\Config\Database;
use App\DAO\PecasDAO;
use App\Models\entity\PecasEntity;

    class PecasController{
        private PecasDAO $pecasDao;

        public function __construct(){
            $this->pecasDao = new PecasDAO(Database::conectar());
        }

        public function index(){
            $activeMenu = 'pecas';
            $pecas = $this->pecasDao->listarPecas();
            $categorias = $this->pecasDao->listarCategorias();
            require BASE_PATH . '/resources/views/pecas/page.php';
        }

        public function adicionarPeca(){
            $peca = new PecasEntity(
                $_POST['nome'],
                (int) $_POST['categoria_id'],
                $_POST['codigo'] ?? null,
                $_POST['marca'] ?? null,
                'ativo',
                (float) $_POST['preco_custo'],
                (float) $_POST['preco_venda'],
                (int) $_POST['quantidade'],
                $_POST['observacao'] ?? null,
            );

            $this->pecasDao->adicionarPeca($peca);

            header('Location: /oficina-sistema/public/pecas');
            exit;
        }

        public function editarPeca(){
            $id = $_POST['id'];

            $peca = new PecasEntity(
                $_POST['nome'],
                (int) $_POST['categoria_id'],
                $_POST['codigo'] ?? null,
                $_POST['marca'] ?? null,
                'ativo',
                (float) $_POST['preco_custo'],
                (float) $_POST['preco_venda'],
                (int) $_POST['quantidade'],
                $_POST['observacao'] ?? null,
            );

            $this->pecasDao->editarPeca($id, $peca);

            header('Location: /oficina-sistema/public/pecas');
            exit;
        }

        public function excluir(){
            $id = $_GET['id'] ?? null;

            if ($id) {
                $this->pecasDao->excluirPeca($id);
            }

        header('Location: /oficina-sistema/public/pecas');
        exit;
    }
    }