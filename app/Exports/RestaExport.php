<?php

namespace App\Exports;

use App\Resta;
use Maatwebsite\Excel\Concerns\FromCollection;

class RestaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Resta::all();
    }
}
