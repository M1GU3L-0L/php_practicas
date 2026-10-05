<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController 
{

    public function show($id)
    {

        $peliculaModel = new PeliculaModel();

        echo view('pelicula/show',[
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('pelicula/new');
    }

    public function create()
    {

        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        echo 'creado';
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/edit',[
            'pelicula' => $peliculaModel
        ]);
    }

    public function update($id)
    {
        
    }

    public function index()
    {

        $peliculaModel = new PeliculaModel();

        var_dump($peliculaModel->findAll());

        echo view('index',[
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

}
