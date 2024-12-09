<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeModel;
class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }

    public function admin_home(Request $request)
    {
        $data['getrecord'] = HomeModel::all();
        return view('backend.home.list', $data);
    }

    public function admin_home_post(Request $request)
    {
        if($request->add_to_update == "Add"){

            $insertRecord = request()->validate([
                'profile' => 'required'
            ]);

            $insertRecord = new HomeModel;
        }else{
            $insertRecord = HomeModel::find($request->id);
        }

        // Update basic fields
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->description = trim($request->description);

        // Handle profile image upload
        if(!empty($request->file('profile'))){

            if(!empty($insertRecord->profile) && file_exists('public/img/'.
            $insertRecord->profile))
            {
                unlink('public/img/'.$insertRecord->profile);
            }

            $file = $request->file('profile');
            $randomStr = str()->random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/', $filename);
            $insertRecord->profile = $filename;
        }
        // Handle background image upload
        if (!empty($request->file('background_image'))) {
            if (!empty($insertRecord->background_image) && file_exists('public/img/' . $insertRecord->background_image))
            {
                unlink('public/img/' . $insertRecord->background_image);
            }

            $file = $request->file('background_image');
            $randomStr = str()->random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/', $filename);
            $insertRecord->background_image = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'Home Page Successfully saved');
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
