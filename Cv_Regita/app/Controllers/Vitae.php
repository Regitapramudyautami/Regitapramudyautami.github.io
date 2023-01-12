<?php

namespace App\Controllers;

class Vitae extends BaseController
{
    public function home()
    {
        echo view('Biodata');
        echo view('Portofolio');
        echo view('Resume');
        echo view ('Contact');
    }
}
