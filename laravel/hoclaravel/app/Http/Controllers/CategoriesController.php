<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        if (isset($_GET['id']))
        {
            echo $_GET['id'];
        };      
        return view('layout');
    }
}
