<?php
namespace App\Controllers;

use Stringable;

class Home extends BaseController
{
    public function index(): string
    {
        return view('principal.html');
    }

}
