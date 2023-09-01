<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Fecades\Storage;
use PDF;

class ManageReportController extends Controller
{
    public function viewReport()
    {
        return view('viewReport');
    }

    public function getDate(Request $request)
    {
        $order = Order::get()
                ->whereBetween('updated_at', [$request->fromdate, $request->todate]);
                // ->get();

            return view('result', compact('order'));
    }

    public function exportpdf(Request $request){

        $order = Order::get()
                ->whereBetween('updated_at', [$request->fromdate, $request->todate]);


        $pdf = PDF::loadView('report',compact('order'));
        return $pdf->download('report.pdf');
        

    }
}
