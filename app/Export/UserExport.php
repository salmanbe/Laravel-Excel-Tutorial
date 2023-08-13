<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UserExport implements FromView, ShouldAutoSize
{
    private $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function view() : View
    {
        return view('excel')->with([
            'users' => $this->users
        ]);
    }
}