<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $pdf = PDF::loadView('invoice');
        return $pdf->download('invoice.pdf');
    }
}
