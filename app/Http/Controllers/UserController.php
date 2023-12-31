<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Http\Requests\ImportExportRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function importExcel(ImportExportRequest $request)
    {
        try {
            Excel::import(new UsersImport, $request->file('file'));
        } catch (ValidationException $e) {
            return redirect()->route('users.index')->with('error', 'Failed to import users. Please check your file.');
        }
    
        return redirect()->route('users.index')->with('success', 'Users imported successfully!');
    }
    

    public function exportExcel(Request $request)
    {
        try {
            return Excel::download(new UsersExport, 'users.xlsx');
        } catch (\Exception $e) {
            return redirect()->route('users.index')->with('error', 'Failed to export users. Please try again.');
        }
    }
}

