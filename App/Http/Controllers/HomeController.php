<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\EducationModel;
use App\Models\ExperienceModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['homeRecords'] = HomeModel::all();
        $data['aboutRecords'] = AboutModel::all();
        $data['educationRecords'] = EducationModel::all();
        $data['experienceRecords'] = ExperienceModel::all();
        $data['className'] = 'index';
        return view('index', $data);
    }
}
