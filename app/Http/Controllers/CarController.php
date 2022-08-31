<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CarRepositoryInterface;
use Illuminate\Http\Request;

class CarController extends Controller
{
    private $CarRepository;

    public function __construct(CarRepositoryInterface $CarRepository)
    {
        $this->CarRepository = $CarRepository;
    }

    public function listing()
    {
        $this->CarRepository->listing();
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);
     //   $data=['title'=>'toyota','value'=>'2'];
        $this->CarRepository->add($data);
        echo 'success';
    }

    public function edit($id)
    {
        $this->CarRepository->edit($id);
    }

    public function update($id,Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);

        $this->CarRepository->update($data,$id);
    }

    public function delete($id)
    {
        $this->CarRepository->delete($id);
    }
}
