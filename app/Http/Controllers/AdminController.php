<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Techs;
use App\Models\Tools;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function connect() {
        return view('admin-tools.login');
    }

    public function showPanel(Request $request) {


        return view('admin-tools.home');
    }

    public function showTechsToolsPage() {
        $techs = Techs::all();
        $tools = Tools::all();

        return view('technologies', ['techs'=>$techs,'tools'=>$tools]);
    }
    public function showProjects() {
        $projects = Projects::all();

        return view('projects', ['projects'=>$projects]);
    }

    public function techsPanel() {
        $techs = Techs::all();
        return view('admin-tools.techs', ['techs' => $techs]);
    }

    public function toolsPanel() {
        $tools = Tools::all();
        return view('admin-tools.tools', ['tools' => $tools]);
    }

    public function cvPanel() {
        //$tools = Tools::all();
        return view('admin-tools.cv');
    }

    public function uploadCv() {
        if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
            $nom = $_FILES['cv_file']['tmp_name'];
            $nomdestination = './cv.pdf';
            move_uploaded_file($nom, $nomdestination);
            return view('admin-tools.cv');

        } else {
            echo "Attaque possible par téléchargement de fichier : ";
            echo "Nom du fichier : '". $_FILES['userfile']['tmp_name'] . "'.";
            return view('admin-tools.cv');

        }
    }

    public function projectsPanel() {
        $projects = Projects::all();
        return view('admin-tools.projects', ['projects' => $projects]);
    }
}
