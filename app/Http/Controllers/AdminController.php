<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Container;
use DateTime;
use Illuminate\Http\Request;
use App\Models\detailCustomer;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{

    // admin gudang
    public function showdatacustomer(Request $request)
    {
        $data = detailCustomer::where('id_container', $request->id)->get();
        return view('admin.gudang.halaman-tambah-data-report', [
            'data' => $data,
            'id' => $request->id,
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

    public function showDataContainer(Request $request)
    {
        $keyword = $request->keyword;
        if ($keyword != null && $keyword != '') {

            return view('admin.gudang.halaman-search-gudang', [
                'containers' => Container::where('vessel', 'like', '%' . $keyword . '%')->get()
            ]);
        } else {
            return view('admin.gudang.halaman-search-gudang', [
                'containers' => Container::all()
            ]);
        }
    }

    public function addDataCustomer(Request $request)
    {
        $date = new DateTime('2001-01-01');
        $formattedDate = $date->format('Y-m-d H:i:s');

        $files = $request->file('photos');

        $detailCustomer = detailCustomer::create([
            'id_container' => $request->id,
            'Bill_of_lading' => $request->billOfLading,
            'Consignee' => $request->consignee,
            'Quantity' => $request->qty,
            'Volume' => $request->volume,
            'date'  => $formattedDate,
            'Report_condition' => $request->reportCondition,
            'Status' => 'progress'
        ]);


        foreach ($files as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName);

            Photo::create([
                'file_name' => $fileName,
                'file_path' => $filePath,
                'id_customer' => $detailCustomer->id,
            ]);
        }

        return redirect(route('dataReport', ['id' => $request->id]));
    }

    public function deleteCustomer(Request $request)
    {
        detailCustomer::where('id', $request->id)->delete();
        return back();
    }


    // gateway admin
    public function showDetail(Request $request)
    {
        $data = DB::table('detail_customer')
            ->select('detail_customer.*', 'container.container')
            ->where('detail_customer.id', '=', $request->id)
            ->leftJoin('container', 'detail_customer.id_container', '=', 'container.id')
            ->first();

        return view('.admin.gateway.halaman-detail', [
            'detail_customer' => $data,
            'id' => $request->id
        ]);
    }

    public function showReport(Request $request)
    {
        $data = DB::table('detail_customer')
            ->select('detail_customer.*', 'container.container')
            ->where('detail_customer.id', '=', $request->id)
            ->leftJoin('container', 'detail_customer.id_container', '=', 'container.id')
            ->first();

        return view('.admin.gateway.halaman-detail-report', [
            'report' => $data->Report_condition,
            'id' => $request->id
        ]);
    }

    public function showPhotos(Request $request)
    {
        $data = DB::table('detail_customer')
            ->select('detail_customer.*', 'container.container')
            ->where('detail_customer.id', '=', $request->id)
            ->leftJoin('container', 'detail_customer.id_container', '=', 'container.id')
            ->first();

            $photos = Photo::where('id_customer', '=', $request->id)->get();

        return view('.admin.gateway.halaman-detail-photo', [
            'report' => $data->Report_condition,
            'id' => $request->id,
            'photos' => $photos,
        ]);
    }

    public function showSearchAdmin(Request $request)
    {
        $keyword = $request->keyword;
        if ($keyword != null && $keyword != '') {
            $data = DB::table('detail_customer')
                ->select('detail_customer.*', 'container.voyage')
                ->where('detail_customer.Consignee', 'like', '%' . $keyword . '%')
                ->join('container', 'detail_customer.id_container', '=', 'container.id')
                ->get();

            return view('.admin.gateway.halaman-search-admin', [
                'detailCustomers' => $data
            ]);
        } else {
            $data = DB::table('detail_customer')
                ->select('detail_customer.*', 'container.voyage')
                ->join('container', 'detail_customer.id_container', '=', 'container.id')
                ->get();

            return view('.admin.gateway.halaman-search-admin', [
                'detailCustomers' => $data
            ]);
        }
    }
}
