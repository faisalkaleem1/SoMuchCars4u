<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\StateRepositoryInterface;
use Illuminate\Http\Request;

class StateController extends Controller
{
    private $StateRepository;

    public function __construct(StateRepositoryInterface $StateRepository)
    {
        $this->StateRepository = $StateRepository;
    }

    public function listing()
    {
        $this->StateRepository->listing();
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'capital' => 'required',
            'year' => 'required',
        ]);
      //  $data=['name'=>'pakistan','code'=>'12','capital'=>'home','year'=>'2000'];
        $this->StateRepository->add($data);
        echo 'success';
    }

    public function edit($id)
    {
        $this->StateRepository->edit($id);
    }

    public function update($id,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'capital' => 'required',
            'year' => 'required',
        ]);

        $this->StateRepository->update($data,$id);
    }

    public function delete($id)
    {
        $this->StateRepository->delete($id);
    }
}
