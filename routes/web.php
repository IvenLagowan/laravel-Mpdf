<?php

use Illuminate\Support\Facades\Route;
use App\models\pdf;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pdf/view/pdf', [PdfController::class, 'view_pdf']);

Route::get('/pdf', function (){
    $data=['pdf'=>pdf::all()];
    $pdf=PDF::loadView('pdf', '$data');
    return $pdf->stream('pdf.index');
}

);