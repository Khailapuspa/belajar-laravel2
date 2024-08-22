<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$kontak = DB::table('kontak')->get();

    	// mengirim data ke view
    	return view('VKontak',['kontak' => $kontak]);

    }
}
