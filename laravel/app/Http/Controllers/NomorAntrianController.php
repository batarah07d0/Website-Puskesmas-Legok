<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\NomorAntrian;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class NomorAntrianController extends Controller
{
    public function showNomorAntrian()
    {
        $nomorAntrian = Antrian::all();
        return view('antriansukses', compact('nomorAntrian'));
    }
    public function createPDF()
    {
        // retrieve all records from db
        $data = Antrian::all();

        // share data to view
        view()->share('nomorAntrian', $data);

        // create an instance of the PDF class
        $pdf = new PDF();

        // call the loadView method on the instance
        $pdf->loadView('pdf_view', $data);

        // return or download the PDF
        return $pdf->download('pdf_file.pdf');
    }
}
