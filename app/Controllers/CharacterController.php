<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Node\Expr\Cast\String_;

class CharacterController extends BaseController
{
    public function index()
    {
        if (request()->is("post")) {
            session()->set($this->request->getPost());

            return redirect()->to("story/0");
        }
        return view("select-character");
    }
}
