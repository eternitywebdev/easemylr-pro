<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehicleType;

class VehicleTypeSeeder extends Seeder
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
                'name' => 'Tata Ace 0-1.5 MT',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Pick Up 1.4 MT',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Pick Up 1.7 MT',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Tata 407 2.2 MT',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Tata 407 3 MT',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => '14 Feet 4 MT',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 5 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 7 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 9 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 10 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 12 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 16 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 20 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 24 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 30 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 35 MT Open Body',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 5 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 7 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 9 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 10 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 12 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 16 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 20 MT Container',
                'status' => 1,
                'created_at' => time()
            ],
            [
                'name' => 'Truck 24 MT Container',
                'status' => 1,
                'created_at' => time()
            ],

        ];
        foreach ($input as $val) {
            VehicleType::firstOrCreate($val);
        }
    }
}
