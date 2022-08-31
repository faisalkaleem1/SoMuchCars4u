<?php

namespace App\Repositories\Interfaces;

Interface StateRepositoryInterface{

    public function listing();
    public function add($data);
    public function edit($id);
    public function update($data,$id);
    public function delete($id);
}
