<?php

namespace App\Imports;

use App\Models\Tree;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

//HeadingRowFormatter::default('none');
class TreeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tree([
            'name' => $row['nederlandse_naam'],
            'name_latin' => $row['latijnse_naam'],
            'number' => $row['nummer'],
            'planting_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['plantdatum']),
            'origin_from' => $row['leverancier'],
            'species' => $row['ras']
        ]);
    }
}
