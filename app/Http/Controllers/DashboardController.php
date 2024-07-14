<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $users = [
            [
                "name" => "bảo ngọc",
                "age" => 31,
            ],
            [
                "name" => "dan",
                "age" => 15,
            ]
        ];
        return view("index",["usersList"=> $users]);
    }

}
