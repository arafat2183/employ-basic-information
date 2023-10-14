<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{
    public function index()
    {
        $employeeInfoData = EmployeeInfo::latest()->get();
        return view('employeeInformation', compact('employeeInfoData'));
    }

    public function addEmployeeInfo(Request $request): RedirectResponse
    {
        EmployeeInfo::create($request->only('name', 'email', 'address', 'mobile', 'dob', 'designation', 'salary'));
        return redirect()->route("index")->with('success','Employee information added successfully!');
    }

    public function deleteEmployeeInfo(int $id): RedirectResponse
    {
        EmployeeInfo::where('id', $id)->delete();
        return redirect()->route("index")->with('success','Employee information successfully deleted from database!');
    }

    public function updateEmployeeInfo(Request $request): RedirectResponse
    {
        EmployeeInfo::where('id', $request->id)->update($request->only('name', 'email', 'address', 'mobile', 'dob', 'designation', 'salary'));
        return redirect()->route("index")->with('success','Employee information updated successfully!');
    }
}
