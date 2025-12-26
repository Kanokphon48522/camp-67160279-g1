<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Constructor
    // MyController()
    function __construct(){

    }

    function index(){
        return view('html101');
    }

    function info(Request $req){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }

    function store(Request $req){
        $data = $req->all();
        return view('result', compact('data'));
    }

}
