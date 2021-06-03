<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function about()
    {
        $formations = [
            'Laravel',
            'Management de projet',
            'WordPress',
            'Vue JS'
        ];
        return view('pages.about', compact('formations'));
    }
}
