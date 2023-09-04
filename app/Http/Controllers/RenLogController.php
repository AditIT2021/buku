<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;

class RenLogController extends Controller
{
    public function index()
    {

        $rentlogs = RentLogs::with(['user', 'book'])->get();
        return view('rentlog', ['rent_logs' => $rentlogs]);
    }
}