<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Export\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        return view('user-list')->with([
            'users' => User::All()
        ]);
    }

    public function export()
    {
        $users = User::All();

        $filename = 'users' . now()->format('d-m-Y') . '.xlsx';

        return Excel::download(new UserExport($users), $filename);
    }
}