<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $users = [
            [
                'id' => 1,
                 'nom' => 'Hatim Ilyas',
                'metier' => 'Developer'
            ],
            [
                'id' => 2,
                'nom' => 'Hatim saad',
                'metier' => 'Designer'
            ],
            [
                'id' => 3,
                'nom' => 'Akouchi Akram',
                'metier' => 'Project Manager'
            ]
        ];
        return view('home' ,compact('users'));
    }
}
