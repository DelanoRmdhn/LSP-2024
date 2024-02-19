<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Siswa;


class FormDataController extends Controller
{
    public function index(){
        $categories = Category::all();
        $siswas = Siswa::all();


        return view('main.landingPage', compact('categories' , 'siswas'));
    }
}
