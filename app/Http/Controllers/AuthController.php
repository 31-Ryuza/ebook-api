<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "NIS" => 3103120201,
            "Nama" => "Ryuza Aly Syahputra",
            "Phone" => 6281931201396,
            "Kelas" => "XI RPL 6"
        ];
    }
}
