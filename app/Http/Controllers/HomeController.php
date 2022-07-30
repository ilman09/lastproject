<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\InputsExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
        public function dashboard()
        {
                $inputs = Input::all();
                return view('user.dashboard',[
                        'inputs' => $inputs
                ]);
        }

        public function pdf()
        {
                $inputs = Input::all();
                $pdf = Pdf::loadView("user.pdf", [
                        "inputs" => $inputs
                ]);
                $pdf->setPaper("A4", "Potrait");
                return $pdf->stream("datasiswa.pdf");
        }
        public function excel()
        {
                $inputs = Input::all();
                return Excel::download(new InputsExport, 'datasiswa.xlsx');
        }
}
