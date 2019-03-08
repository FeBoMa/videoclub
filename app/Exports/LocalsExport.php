<?php

namespace App\Exports;

use App\Local;
use Maatwebsite\Excel\Concerns\FromCollection;

class LocalsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Local::all();
    }
}

