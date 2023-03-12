<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Http\Response;

class PdfController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function generatePDF(Request $request): Response
    {
        $data = [
            'num_rows' => isset($request->num_rows) ? $request->num_rows : 10,
            'title' => 'Evacuee List',
        ];
        $pdf = PDF::loadView('template-pdf', $data);
        return $pdf->download('evacuee.pdf');
    }
}