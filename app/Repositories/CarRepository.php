<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Models\Cars;

class CarRepository implements CarRepositoryInterface
{
    public function listing()
    {
        Cars::with('deliveries','models')->get();

    }

    public function add($data)
    {
        Cars::create($data);

    }

    public function edit($id)
    {
       $cars= Cars::find($id);
        $cars->with('deliveries','models')->get();
    }

    public function update($data, $id)
    {
        Cars::where('id',$id)->update([
            'title' => $data['name'],'value'=>$data['code']
        ]);
    }

    public function delete($id)
    {
        Cars::find($id)->delete();
    }


}
