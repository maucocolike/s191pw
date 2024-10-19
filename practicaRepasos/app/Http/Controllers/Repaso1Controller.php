<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Repaso1Controller extends Controller
{
    public function portada(){
        return view('portada');
    }
    public function repaso1(){
        return view('repaso1');
    }

    public function convertir(Request $request)
    {
        $conversion = '';
        $value = null;

        if ($request->filled('mb')) {
            $value = $request->input('mb');
            $conversion = "$value MB son " . ($value / 1024) . " GB";
        } elseif ($request->filled('gb_to_mb')) {
            $value = $request->input('gb_to_mb');
            $conversion = "$value GB son " . ($value * 1024) . " MB";
        }

        return view('repaso1', ['conversion' => $conversion]);
    }
}