<?php


namespace App\Repositories;

use App\Models\Delivery;
use App\Models\User;
use App\Repositories\Interfaces\StateRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;



class UserRepository implements UserRepositoryInterface
{

    public function listing()
    {
      $user=  User::with('states','deliveries')->get();
    }

    public function add($data)
    {
        User::create($data);

    }

    public function edit($id)
    {
       $user= User::find($id);
        $user->with('states','deliveries')->get();

    }

    public function update($data, $id)
    {
        User::find($id)->update([
            'name' => $data['name'],'state_id'=>$data['state_id']
        ]);
    }

    public function delete($id)
    {
        User::find($id)->delete();
    }


}
