<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController 
{

    public function show($id)
    {
        $peliculaModel = new PeliculaModel();

        var_dump($peliculaModel->find($id));
    }

    public function new()
    {
        echo 'new';
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
