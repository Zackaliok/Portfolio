<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToolsController extends Controller
{
    public function index() {
        return Tools::all();
    }

    public function showToolsPanel() {
        $tools = Tools::all();
        return view('admin-tools.tools', ['tools' => $tools]);
    }

    public function update(Request $request) {
        DB::table('tools')
            ->updateOrInsert([
                'id' => $request['id']
            ],[
                'name' => $request['name'],
                'url' => $request['url'],
                'updated_at' => now()
            ]);
        return $this->showToolsPanel();
    }
}
