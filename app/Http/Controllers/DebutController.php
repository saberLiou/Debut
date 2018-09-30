<?php

namespace App\Http\Controllers;

class DebutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.saberliou.debut');
    }
}