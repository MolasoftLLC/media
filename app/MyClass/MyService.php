<?php 
namespace App\MyClass;

use App\MyClass\MyServiceInterface;

class MyService implements MyServiceInterface
{
    private $msg;
    private $data;

    public function __construct()
    {
        $this->msg = 'Hello This is MyService';
        $this->data = ['HELLO','WELCOME','BYE'];
    }

    public function say()
    {
        return $this->msg;
    }

    public function data()
    {
        return $this->data;
    }
}