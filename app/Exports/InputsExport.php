<?php

namespace App\Exports;

use App\Models\Input;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InputsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('user.excel', [
            'inputs' => Input::all()
        ]);
    }
}
