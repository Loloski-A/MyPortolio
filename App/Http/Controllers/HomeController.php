<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = HomeModel::all();
        $data['className'] = 'index';
        return view('index', $data);
    }
}
