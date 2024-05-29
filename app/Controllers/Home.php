<?php

namespace App\Controllers;
use App\Models\ModelHome;
use App\Models\ProjectHome;

class Home extends BaseController
{
    public function index()
    {
        $userModel = new ModelHome();
        $nameData = $userModel->getName();
        $aboutData = $userModel->getAbout();  
        
        // Project
        $projectModel = new ProjectHome();
        $projects = $projectModel->findAll();

        $data = [
            'title' => 'Raihan Herlambang',
            'nama' => ucwords(strtolower($nameData['nama'])),
            'about' => $aboutData['about'],

            // Project
            'projects' => $projects,
        ];

        return view('body', $data);
    }
}
