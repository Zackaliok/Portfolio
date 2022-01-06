<?php

namespace App\Http\Controllers;

use App\Models\Techs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techs = Techs::all();
        return view('technologies', ['techs' => $techs]);
    }

    public function showTechsPanel() {
        $techs = Techs::all();
        return view('admin-tools.techs', ['techs' => $techs]);
    }


    public function update(Request $request) {
        DB::table('techs')
            ->updateOrInsert([
                'id' => $request['id']
            ],[
                'name' => $request['name'],
                'url' => $request['url'],
                'updated_at' => now()
            ]);
        return $this->showTechsPanel();
    }
}
