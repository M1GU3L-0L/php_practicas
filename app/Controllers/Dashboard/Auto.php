<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\AutoModel;

class Auto extends BaseController
{
    protected AutoModel $autoModel;

    public function test(int $id)
    {
        echo 'test'.$id;
    }

    public function show(int $id)
    {
        $autoModel = new AutoModel();

        echo view('auto/show', [
            'auto' => $autoModel->find($id)
        ]);
    }

    public function new()
    {
        echo view('auto/new', [
            'auto' => [
                'marca' => '',
                'modelo' => '',
                'anio' => '',
                'descripcion' => '',
            ]
        ]);
    }

    public function create()
    {
        $autoModel = new AutoModel();

        $autoModel->insert([
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'anio' => $this->request->getPost('anio'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);

        return redirect()->to('/dashboard/autos');
    }

    public function edit(int $id)
    {
        $autoModel = new AutoModel();

        echo view('auto/edit', [
            'auto' => $autoModel->find($id)
        ]);
    }

    public function update(int $id)
    {
        $autoModel = new AutoModel();

        $autoModel->update($id, [
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'anio' => $this->request->getPost('anio'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);

        return redirect()->to('/dashboard/autos');
    }

    public function delete(int $id)
    {
        $autoModel = new AutoModel();
        $autoModel->delete($id);

        return redirect()->to('/dashboard/autos');
    }

    public function index()
    {
        $autoModel = new AutoModel();

        echo view('auto/index', [
            'autos' => $autoModel->findAll()
        ]);
    }
}
