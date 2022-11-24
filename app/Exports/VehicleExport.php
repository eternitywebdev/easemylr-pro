<?php

namespace App\Exports;

use App\Models\Vehicle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\FromQuery;
use Session;
use Helper;

class VehicleExport implements FromCollection, WithHeadings,ShouldQueue
{
    /**
    * @return \Illuminate\Support\Collection
    */   
    public function collection()
    {
        ini_set('memory_limit', '2048M');
        set_time_limit ( 6000 );
        $arr = array();
        $query = Vehicle::query();

        $vehicle = $query->with('State')->orderby('created_at','DESC')->get();

        if($vehicle->count() > 0){
            foreach ($vehicle as $key => $value){  
                if(!empty($value->State)){
                    if(!empty($value->State->name)){
                      $state = $value->State->name;
                    }else{
                      $state = '';
                    }
                }else{
                    $state = '';
                }
                $arr[] = [
                    'id' => $value->id,
                    'regn_no' => $value->regn_no,
                    'mfg' => $value->mfg,
                    'make' => $value->make,
                    'engine_no' => $value->engine_no,
                    'chassis_no' => $value->chassis_no,
                    'gross_vehicle_weight' => $value->gross_vehicle_weight,
                    'unladen_weight' => $value->unladen_weight,
                    'tonnage_capacity' => $value->tonnage_capacity,
                    'body_type' => $value->body_type,
                    'state_id' => $state,
                    'regndate' => $value->regndate,
                    'hypothecation' => $value->hypothecation,
                    'ownership' => $value->ownership,
                    'owner_name' => $value->owner_name,
                    'owner_phone' => $value->owner_phone,
                    'rc_image' => $value->rc_image,
                ];
            }
        }                 
        return collect($arr);
    }
    public function headings(): array
    {
        return [
            'id',
            'regn_no',
            'mfg',
            'make',
            'engine_no',
            'chassis_no',
            'gross_vehicle_weight',
            'unladen_weight',
            'tonnage_capacity',
            'body_type',
            'state_id',
            'regndate',
            'hypothecation',
            'ownership',
            'owner_name',
            'owner_phone',
            'rc_image',
        ];
    }
}
