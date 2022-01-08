<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index() {
        return Projects::all();
    }

    public function showProjectsPanel() {
        $projects = Projects::all();
        return view('admin-tools.projects', ['projects' => $projects]);
    }

    public function update(Request $request) {
        DB::table('projects')
            ->updateOrInsert([
                'id' => $request['id']
            ],[
                'name' => $request['name'],
                'url' => $request['url'],
                'resume' => $request['resume'],
                'link' => $request['link'],
                'updated_at' => now()
            ]);
        return $this->showProjectsPanel();
    }
}
