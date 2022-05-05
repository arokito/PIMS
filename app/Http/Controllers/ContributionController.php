<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function index(){
        return view('contributions.index');
    }

// public function create(){

//     return view('contributions.create');
// }

public function payCash(){
    return view('contributions.pay_cash');
}

public function payMpesa(){
    return view('contributions.pay_mpesa');
}

public function createContribution(){
    return view('contributions.create');
}
}
