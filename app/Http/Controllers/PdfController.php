<?php

namespace App\Http\Controllers;

use App\Models\Evacuee;
use App\Services\EvacueeInfoService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDF;

class PdfController extends Controller
{
    /**
     * @var EvacueeInfoService
     */
    private $evacueeInfoService;

    /**
     * @param EvacueeInfoService $evacueeInfoService
     */
    public function __construct(EvacueeInfoService $evacueeInfoService) {
        $this->evacueeInfoService = $evacueeInfoService;
    }

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

    /**
     * @param Evacuee $evacuee
     * @return Response
     */
    public function generateEvacueesPDF(Evacuee $evacuee): Response
    {
        $brgy = $evacuee->evacuationCenter->barangay;
        $evacuees = $this->evacueeInfoService->getEvacueesListByCount($evacuee);
        $data = [
            'title' => 'Brgy. '.$brgy->name.' Evacuee List',
            'evacuees' => $evacuees,
        ];
   
        define("DOMPDF_ENABLE_REMOTE", false);
        $pdf = PDF::loadView('brgy-template-pdf', $data);
        return $pdf->download('brgy_evacuees.pdf');
    }
}