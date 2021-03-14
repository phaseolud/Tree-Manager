<?php

namespace App\Imports;

use App\Models\Tree;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Illuminate\Support\Facades\Log;

//HeadingRowFormatter::default('none');

class TreeImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            0 => new FirstSheetImport()
        ];
    }
}


class FirstSheetImport implements ToModel, WithHeadingRow, WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tree([
            'id' => $row['nummer'],
            'name' => firstCapital($row['nederlandse_naam']),
            'name_latin' => ($row['latijnse_naam']),
            'number' => $row['nummer'],
            'planting_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['plantdatum']),
            'origin_from' => ($row['leverancier']),
            'species' => ($row['ras']),
        ]);
    }

    public function uniqueBy()
    {
        return 'id';
    }

}
function firstCapital(?string $text): ?string
{
    if (is_null($text)) {
        return null;
    }
    else {
        return ucfirst(strtolower($text));
    }
}
