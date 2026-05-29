<?php
namespace App\Controllers;

use App\DAO\CategoriasDAO;
use App\Config\Database;

class CategoriaController{
    private CategoriaDAO $categoriaDao;

    public function __construct(){
        $this->categoriaDao = new CategoriaDAO(Database::conectar());
    }

    public function index(){

    }
}
?>