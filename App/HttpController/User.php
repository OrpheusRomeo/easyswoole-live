<?php
namespace App\HttpController;

use EasySwoole\EasySwoole\Trigger;
use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;

class User extends Controller
{

    public function index()
    {
        $data['id'] = 101;
        $data['name'] = "jack";

        $this->response()->write(json_encode($data));
        return '/User/test';

    }

    public function test()
    {
        $this->response()->write("test method for the User Controller");
    }
}
