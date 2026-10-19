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

        echo view('dashboard/categoria/show',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('dashboard/categoria/new', [
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

        return redirect()->to('/dashboard/categoria')->with('mensaje', 'Registro creado exitosamente');
    }

    public function edit(int $id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function update(int $id)
    {
        
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
        ]);

        return redirect()->to('/dashboard/categoria')->with('mensaje', 'Registro actualizado exitosamente');
    }

    public function delete(int $id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        session()->setFlashdata('mensaje', 'Registro eliminado con exito');

        return redirect()->to('/dashboard/categoria');
        //->with('mensaje', 'Registro eliminado exitosamente')
    }

    public function index()
    {

        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/index',[
            'categorias' => $categoriaModel->findAll()
        ]);
    }
}

?>