<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $UserRepository;

    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function listing()
    {
        $this->UserRepository->listing();
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'state_id' => 'required',
        ]);
    //    $data=['name'=>'ali','state_id'=>'2'];
        $this->UserRepository->add($data);
        echo 'success';
    }

    public function edit($id)
    {
        $this->UserRepository->edit($id);
    }

    public function update($id,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'state_id' => 'required',
        ]);

        $this->UserRepository->update($data,$id);
    }

    public function delete($id)
    {
        $this->UserRepository->delete($id);
    }
}
