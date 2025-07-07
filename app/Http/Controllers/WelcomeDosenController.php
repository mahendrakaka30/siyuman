<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeDosenController extends Controller
{
      public function index()
        {
            return view('welcomedosen');
        }

      // Controller
        public function show($id)
        {
            return view('welcomedosen', ['id' => $id]);
        }
}