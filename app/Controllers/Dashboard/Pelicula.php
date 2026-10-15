<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController 
{
    protected PeliculaModel $peliculaModel;

    public function test(int $id)
    {
        echo 'test'.$id;
    }

    public function show(int $id)
    {

        $peliculaModel = new PeliculaModel();

        echo view('pelicula/show',[
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('pelicula/new',[
            'pelicula' => [

                'titulo' => '',
                'descripcion' => ''
            ]
        ]);
    }

    public function create()
    {

        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('/dashboard/pelicula');
    }

    public function edit(int $id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/edit',[
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function update(int $id)
    {
        
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        //return redirect()->back();
        return redirect()->to('/dashboard/pelicula');
    }

    public function delete(int $id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        return redirect()->to('/dashboard/pelicula');
    }

    public function index()
    {

        $peliculaModel = new PeliculaModel();

        echo view('pelicula/index',[
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

}
