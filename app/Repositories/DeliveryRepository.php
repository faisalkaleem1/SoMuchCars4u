<?php


namespace App\Repositories;

use App\Models\Delivery;
use App\Repositories\Interfaces\DeliveryRepositoryInterface;



class DeliveryRepository implements DeliveryRepositoryInterface
{

    public function listing()
    {
        Delivery::with('cars','users','models')->get();

    }
    public function add($data)
    {
        Delivery::create($data);

    }

    public function edit($id)
    {
        $delivery= Delivery::find($id);
        $delivery->with('cars','users','models')->get();

    }

    public function update($data, $id)
    {

        Delivery::find($id)->update([
            'user_id' => $data['name'],'car_id'=>$data['state_id'],'model_id'=>$data['state_id']
        ]);
    }

    public function delete($id)
    {
        Delivery::find($id)->delete();
    }


}
