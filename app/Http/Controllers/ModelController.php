<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ModelRepositoryInterface;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    private $ModelRepository;

    public function __construct(ModelRepositoryInterface $ModelRepository)
    {
        $this->ModelRepository = $ModelRepository;
    }

    public function listing()
    {
        $this->ModelRepository->listing();
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'value' => 'required',
            'car_id' => 'required',
        ]);
     //   $data = ['title' => 'corolla', 'value' => '90', 'car_id' => '2'];
        $this->ModelRepository->add($data);
        echo 'success';
    }

    public function edit($id)
    {
        $this->ModelRepository->edit($id);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'value' => 'required',
            'car_id' => 'required',
        ]);

        $this->ModelRepository->update($data, $id);
    }

    public function delete($id)
    {
        $this->ModelRepository->delete($id);
    }
}
