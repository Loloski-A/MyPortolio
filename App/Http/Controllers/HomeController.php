<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use App\Models\HomeModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['homeRecords'] = HomeModel::all();
        $data['aboutRecords'] = AboutModel::all();
        $data['className'] = 'index';
        return view('index', $data);
    }
}
