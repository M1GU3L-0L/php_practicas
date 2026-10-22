<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController 
{
    protected PeliculaModel $peliculaModel;

    public function show(int $id)
    {

        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/show',[
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('dashboard/pelicula/new',[
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

        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro creado exitosamente');
    }

    public function edit(int $id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/edit',[
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
        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro actualizado exitosamente');
    }

    public function delete(int $id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro eliminado exitosamente');
    }

    public function index()
    {
        session()->set('key', 7);

        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/index',[
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

}
