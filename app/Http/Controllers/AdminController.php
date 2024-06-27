<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Container;
use DateTime;
use Illuminate\Http\Request;
use App\Models\detailCustomer;

class AdminController extends Controller
{
    public function showdatacustomer() {
        $data=detailCustomer::all();
        return view('halaman-tambah-data-report',[
            'data' => $data

        ]);
    }

    public function addDataContainer(Request $request)
    {
        $date = new DateTime('2001-01-01');
        $eta = $date->format('Y-m-d H:i:s');

        Container::create([
            'vessel' => $request->vessel,
            'voyage' => $request->voyage,
            'container' => $request->container,
            'Total_Pos' => $request->totalPos,
            'ATA'  => $eta,
        ]);

        return redirect(route('dashboardGudang'));
    }

    public function showDataContainer()
    {
        return view('/halaman-search-gudang', [
            'containers' => Container::all()
        ]);
    }

    public function addDataCustomer(Request $request)
    {
        $date = new DateTime('2001-01-01');
        $formattedDate = $date->format('Y-m-d H:i:s');

        detailCustomer::create([
            'id_container' => '1',
            'Bill_of_lading' => $request->billOfLading,
            'Consignee' => $request->consignee,
            'Quantity' => $request->qty,
            'Volume' => $request->volume,
            'date'  => $formattedDate,
            'Report_condition' => $request->reportCondition,
            'Status' => 'progress'
        ]);

        return redirect(route('dataReport'));
    }

    public function showDetail()
    {
        return view('/halaman-detail', [
            'detail_customer' => detailCustomer::all()->first()
        ]);
    }

    public function showHalamanDetail()
    {
        return view('/halaman-search-admin', [
            'detailCustomers' => detailCustomer::all()
        ]);
    }
}
