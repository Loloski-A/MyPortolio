<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }

    public function admin_home(Request $request)
    {
        return view('backend.home.list');
    }

    public function admin_about(Request $request)
    {
        return view('backend.about.list');
    }

    public function admin_skills(Request $request)
    {
        return view('backend.skills.list');
    }

    public function admin_work(Request $request)
    {
        return view('backend.work.list');
    }

    public function admin_services(Request $request)
    {
        return view('backend.services.list');
    }

    public function admin_contact(Request $request)
    {
        return view('backend.contact.list');
    }
}
