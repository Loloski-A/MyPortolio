<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EducationModel;

class EducationController extends Controller
{
    public function education_add(Request $request)
    {
        return view('backend.education.add');
    }

    public function education_add_post(Request $request)
    {
        $insertRecord = new EducationModel;

        $insertRecord->institution = trim($request->institution);
        $insertRecord->course = trim($request->course);
        $insertRecord->started_date = trim($request->started_date);
        $insertRecord->end_date = trim($request->end_date);

        $insertRecord->save();

        return redirect('admin/education')->with('success', 'Education Journey Successfully Saved');
    }

    public function education_add_edit($id, Request $request)
    {
        $data['educationRecord'] = EducationModel::find($id);
        return view('backend.education.edit', $data);
    }

    public function education_add_edit_post($id, Request $request)
    {
        $updatedRecord = EducationModel::find($id);

        $updatedRecord->institution = trim($request->institution);
        $updatedRecord->course = trim($request->course);
        $updatedRecord->started_date = trim($request->started_date);
        $updatedRecord->end_date = trim($request->end_date);

        $updatedRecord->save();

        return redirect('admin/education')->with('success', 'Education Journey Successfully Updated');
    }

    public function education_delete($id, Request $request)
    {
        $deleteRecord = EducationModel::find($id);
        $deleteRecord->delete();

        return redirect()->back()->with('error', 'Education Journey Record Successfully Deleted');
    }
}
