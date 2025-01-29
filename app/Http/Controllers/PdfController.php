<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    function index(){
        $data = Pdf::orderBy('nama'. 'asc')->get();
        $data = view("pdf.index", ['data' => $data]);
    }
    function view_pdf(){
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }
}
