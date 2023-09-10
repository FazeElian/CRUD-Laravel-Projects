<?php

// app/Http/Controllers/ProductPDFController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf; // Asegúrate de importar correctamente la clase Dompdf
use App\Models\Sale;

class SalePDFController extends Controller
{
    public function generatePDF()
    {
        $sales = Sale::all();

        // Generar el PDF usando la vista index_pdf.blade.php
        $pdf = new Dompdf(); // Crea una nueva instancia de Dompdf
        $pdf->loadView('sales.index_pdf', compact('sales'));

        // Descargar el PDF
        return $pdf->stream('sales.pdf');
    }
}
