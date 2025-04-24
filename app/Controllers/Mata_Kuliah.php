<?php

namespace App\Controllers;

class Mata_Kuliah extends BaseController
{
    public function pemweb2(): string
    {
        return view('mata_kuliah/pemweb2');
    }
    public function kewirausahaan(): string
    {
        return view('mata_kuliah/kewirausahaan');
    }
    public function metopen() : string
    {
        return view('mata_kuliah/metopen');  
    }
    public function aljabar() : string
    {
        return view('mata_kuliah/aljabar');  
    }

}