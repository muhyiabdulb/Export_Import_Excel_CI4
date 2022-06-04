<?php

namespace App\Controllers;


use App\Models\MahasiswaModel;
use App\Controllers\BaseController;

class Test extends BaseController
{
    public function __construct()
    {
        $this->Mahasiswa = new MahasiswaModel();
        // helper('form'); //atau bisa tambahkan di BaseController dibagian protected $helpers = ['form'];
    }

    public function index()
    {
        $data = [
            'mahasiswas' => $this->Mahasiswa->findAll()
        ];
        return view("test/index.php");
    }

}
