<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Quotation;
use App\Models\QuotationItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    //
    public function pdf()
    {
        $pdf = Pdf::loadView('Pdf.firstpdf');       
        return $pdf->stream();

        // $pdf = App::make('dompdf.wrapper');
        // $html = view('Pdf.firstpdf')->render();
        // $pdf->loadHTML($html);
        // return $pdf->stream();

    }

    public function quotationPdf($quote_id){
        $quotation = Quotation::find($quote_id);        
        $quotationItems = QuotationItem::where('quote_id', $quote_id)->get();
        $pdf = Pdf::loadView('Pdf.quotation',compact('quotation','quotationItems'));      
        return $pdf->stream();
    }

    public function invoicePdf($invoice_id){
        return view('Pdf.invoice',compact('invoice_id'));

        $pdf = Pdf::loadView('Pdf.invoice',compact("invoice_id"));        
        return $pdf->stream();
    }

}
