<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\DeliveryRepositoryInterface;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    private $DeliveryRepository;

    public function __construct(DeliveryRepositoryInterface $DeliveryRepository)
    {
        $this->DeliveryRepository = $DeliveryRepository;
    }

    public function listing()
    {
        $this->DeliveryRepository->listing();
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'car_id' => 'required',
            'model_id' => 'required',
        ]);
        // $data=['user_id'=>'2','car_id'=>'1','model_id'=>'2'];
        $this->DeliveryRepository->add($data);
        echo 'success';
    }

    public function edit($id)
    {
        $this->DeliveryRepository->edit($id);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'car_id' => 'required',
            'model_id' => 'required',
        ]);

        $this->DeliveryRepository->update($data, $id);
    }

    public function delete($id)
    {
        $this->DeliveryRepository->delete($id);
    }
}
