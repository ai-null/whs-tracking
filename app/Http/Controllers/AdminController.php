<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Container;
use DateTime;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function addDataContainer(Request $request) {
        $date = new DateTime('2001-01-01');
        $eta = $date->format('d MM YYYY H:i:s');

        Container::create([
            'vessel' => $request->vessel,
            'voyage' => $request->voyage,
            'container' => $request->container,
            'Total_Pos' => $request->totalPos,
            'ATA'  => $eta,
        ]);

        return redirect(route('dashboardGudang'));
    }

    public function showDataContainer() {
        return view('/halaman-search-gudang', [
            'containers' => Container::all()
        ]);
    }
}