<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use App\Models\Driver;
use DB;

class DriverImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $driver = DB::table('drivers')->select('license_number')->where('license_number', $row['license_number'])->first();
        if(empty($driver)){
            return new Driver([
                'name'           => $row['name'],
                'phone'          => (float)$row['phone'],
                'license_number' => $row['license_number'],
                'license_image'  => $row['license_image'],
                'status'         => "1",
                'created_at'     => time(),

            ]);
        }

    }
}
