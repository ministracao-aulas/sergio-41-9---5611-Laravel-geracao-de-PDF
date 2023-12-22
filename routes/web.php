<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('pdf')->group(function () {
    Route::get('/view', function () {
        return view('pdf.invoice', [
            'id' => __LINE__,
        ]);
    });

    Route::get('/stream', function () {
        $pdf = Pdf::loadView('pdf.invoice', [
            'id' => __LINE__,
        ]);

        return $pdf->stream('invoice.pdf');
    });

    Route::get('/download', function () {
        $pdf = Pdf::loadView('pdf.invoice', [
            'id' => __LINE__,
        ]);

        return $pdf->download('invoice.pdf');
    });

    Route::get('/generate', function () {
        $pdf = Pdf::loadView('pdf.invoice', [
            'id' => __LINE__,
        ]);

        $pdf->save(
            '../storage/logs/invoice.pdf'
        );
    });
});
