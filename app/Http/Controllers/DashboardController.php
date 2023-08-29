<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\LokasiKos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    
    public function index()
    {
        sleep(1); // Simulating delay for loading
        $totalKamars = Kamar::count();
        $totalLokasiKos = LokasiKos::count();
    
        $totalKamarSudahTerisi = Kamar::where('status', 'sudah terisi')->count();
        $totalKamarBelumTerisi = Kamar::where('status', 'belum terisi')->count();
    
        return view('dashboard.dashboard', compact('totalKamars', 'totalLokasiKos', 'totalKamarSudahTerisi', 'totalKamarBelumTerisi'));
    }
    
}
