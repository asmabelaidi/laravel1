<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
        $this->middleware(middleware: 'auth')->except(methods: 'showString1');
    }


    function showString1()
    {
        return 'Hello from 1 without middelware';
    }
    function showString2()
    {
        return 'Hello from 2';
    }
    function showString3()
    {
        return 'Hello from 3';
    }
}
