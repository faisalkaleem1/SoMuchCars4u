<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\StateRepositoryInterface;
use App\Models\States;

class StateRepository implements StateRepositoryInterface
{
    public function listing()
    {
        States::with('users')->get();

    }

    public function add($data)
    {
        States::create($data);

    }

    public function edit($id)
    {
        States::find($id);
    }

    public function update($data, $id)
    {
        States::find($id)->update([
            'name' => $data['name'],'code'=>$data['code'],'capital'=>$data['capital'],'year'=>$data['year']
        ]);
    }

    public function delete($id)
    {
        States::find($id)->delete();
    }


}
