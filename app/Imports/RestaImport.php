<?php

namespace App\Imports;

use App\Resta;
use Maatwebsite\Excel\Concerns\ToModel;

class RestaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Resta([
            'name'          => $row[0],
            'type'          => $row[1],
            'stock'         => $row[2],
            'price'         => $row[3],
            'created_at'    => $row[4],
            'updated_at'    => $row[5],
        ]);
    }
}
