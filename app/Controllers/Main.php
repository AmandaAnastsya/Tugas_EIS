<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view ('index');
    }

    public function resume()
    {
        return view ('resume');
    }

    public function projects()
    {
        return view ('projects');
    }

    public function contact()
    {
        return view ('contact');
    }
}

