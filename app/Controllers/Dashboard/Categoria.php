<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    protected CategoriaModel $categoriaModel;

    public function show(int $id)
    {
        
        $categoriaModel = new CategoriaModel();

        echo view('categoria/show',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('categoria/new', [
            'categoria' => [
                'titulo' => ''
            ]
        ]);
    }

    public function create()
    {

        $categoriaModel = new CategoriaModel();

        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo')
        ]);

        return redirect()->to('/dashboard/categoria');
    }

    public function edit(int $id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function update(int $id)
    {
        
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
        ]);

        return redirect()->to('/dashboard/categoria');
    }

    public function delete(int $id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        return redirect()->to('/dashboard/categoria');
    }

    public function index()
    {

        $categoriaModel = new CategoriaModel();

        echo view('categoria/index',[
            'categorias' => $categoriaModel->findAll()
        ]);
    }
}

?>