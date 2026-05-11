<?php

namespace App\Controllers;

use App\DAO\ServicosDAO;
use App\Config\Database;

class ServicoController
{
    private ServicosDAO $servicosDao;

    public function __construct()
    {
        $this->servicosDao = new ServicosDAO(Database::conectar());
    }

    public function index(){
        $activeMenu = 'servicos'; // ou clientes, dashboard, etc
        $servicos = $this->servicosDao->listarServicos();
        require BASE_PATH . '/resources/views/servicos/page.php';
    }
}