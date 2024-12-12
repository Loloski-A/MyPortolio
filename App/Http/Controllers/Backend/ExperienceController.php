<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ExperienceModel;

class ExperienceController extends Controller
{
    public function experience_add(Request $request)
    {
        return view('backend.experience.add');
    }

    public function experience_add_post(Request $request)
    {
        $insertRecord = new ExperienceModel;

        $insertRecord->company = trim($request->company);
        $insertRecord->role = trim($request->role);
        $insertRecord->started_date = trim($request->started_date);
        $insertRecord->end_date = trim($request->end_date);

        $insertRecord->save();

        return redirect('admin/experience')->with('success', 'Your Experience Successfully Saved');
    }

    public function experience_add_edit($id, Request $request)
    {
        $data['experienceRecord'] = ExperienceModel::find($id);
        return view('backend.experience.edit', $data);
    }

    public function experience_add_edit_post($id, Request $request)
    {
        $updatedRecord = ExperienceModel::find($id);

        $updatedRecord->company = trim($request->company);
        $updatedRecord->role = trim($request->role);
        $updatedRecord->started_date = trim($request->started_date);
        $updatedRecord->end_date = trim($request->end_date);

        $updatedRecord->save();

        return redirect('admin/experience')->with('success', 'Your Experience Successfully Updated');
    }

    public function experience_delete($id, Request $request)
    {
        $deleteRecord = ExperienceModel::find($id);
        $deleteRecord->delete();

        return redirect()->back()->with('error', 'Education Journey Record Successfully Deleted');
    }
}
