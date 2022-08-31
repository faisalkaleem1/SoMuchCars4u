<?php


namespace App\Repositories;

use App\Models\Models;
use App\Repositories\Interfaces\ModelRepositoryInterface;



class ModelRepository implements ModelRepositoryInterface
{
    public function listing()
    {
       Models::with('cars','deliveries')->get();

    }

    public function add($data)
    {
        Models::create($data);

    }

    public function edit($id)
    {
        $user= Models::find($id);
        $user->with('cars','deliveries')->get();

    }

    public function update($data, $id)
    {
        Models::find($id)->update([
            'title' => $data['name'], 'value' => $data['value'],'car_id'=>$data['car_id']
        ]);
    }

    public function delete($id)
    {
        Models::find($id)->delete();
    }


}
