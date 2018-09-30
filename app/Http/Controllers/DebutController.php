<?php

namespace App\Http\Controllers\Vendor\saberLiou;

use App\Http\Controllers\Controller;

class DebutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.saberliou.debut.debut');
    }
}