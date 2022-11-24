<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [
                'name' => 'Andaman and Nicobar Islands',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Andhra Pradesh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Arunachal Pradesh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Assam',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Bihar',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Chandigarh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Chhattisgarh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Dadra and Nagar Haveli',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Daman and Diu',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Delhi',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Goa',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Gujarat',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Haryana',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Himachal Pradesh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Jammu and Kashmir',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Jharkhand',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Karnataka',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Kerala',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Ladakh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Lakshadweep',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Madhya Pradesh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Maharashtra',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Manipur',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Meghalaya',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Mizoram',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Nagaland',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Odisha',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Pondicherry',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Punjab',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Rajasthan',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Sikkim',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Tamil Nadu',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Telangana',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Tripura',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Uttar Pradesh',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Uttarakhand',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'West Bengal',
                'status' => 1,
                'created_at' => time()
            ],     
            
        ];
        foreach ($input as $val) {
            State::firstOrCreate($val);
        }
    }
}
