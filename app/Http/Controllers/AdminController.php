<?php

namespace App\Http\Controllers;

use App\Models\Techs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function connect() {
        return view('admin-tools.login');
    }

    public function showPanel(Request $request) {


        return view('admin-tools.home');
    }

    public function techsPanel() {
        $techs = Techs::all();
        return view('admin-tools.techs', ['techs' => $techs]);
    }
}
