<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function afficheAcceuil()
    {
        return view('pages.front-office.welcome', 
        [
           'nomSite'      => 'Service en ligne de mon Ministère',   
           'nomMinistere' => 'Ministere de Laravel au Burkina Faso',   
        ]
        );
    }
    
    public function afficheProcedure($param)
    {
       return view('pages.front-office.procedure', 
        [
            'parametre' => $param       
        ]);
    }


}
